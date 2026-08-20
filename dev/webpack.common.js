const path = require("path"); // pathモジュールの読み込み
const fs = require("fs");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

// production モード以外の場合、変数 enabledSourceMap は true
// 本番環境のときはsoucemapを出力させない設定
const enabledSourceMap = process.env.NODE_ENV !== "production";

// コンパイル対象の候補。存在するものを上から順に採用するので、
// SCSSを使わない案件で assets/scss を消してもビルドが落ちない。
// clean は「出力先(assets/css)にソースがあるか」で切り替える
const sourceCandidates = [
  // SCSS案件：assets/cssは生成物だけなので毎回クリーンにしてよい
  { entry: "assets/scss/styles.scss", clean: true },
  // 素のCSS案件：ソースがassets/css内にあるため、クリーンすると消えてしまう
  { entry: "assets/css/styles.src.css", clean: false },
];

const source = sourceCandidates
  .map((candidate) => ({
    ...candidate,
    path: path.resolve(__dirname, "..", candidate.entry),
  }))
  .find((candidate) => fs.existsSync(candidate.path));

if (!source) {
  throw new Error(
    "コンパイル対象が見つかりません。次のいずれかを用意してください：\n  " +
      sourceCandidates.map((candidate) => candidate.entry).join("\n  ")
  );
}

module.exports = {
  // エントリーポイントの設定
  entry: {
    // コンパイル対象のファイル（SCSSが無ければ素のCSSにフォールバック）
    styles: source.path,
  },
  // コンパイル先フォルダを指定
  output: {
    path: path.resolve(__dirname, "../assets/css"),
    //ファイルを出力する前にディレクトリをクリーンアップ
    clean: source.clean,
    // ソースマップ内のソースパスを実ファイルの絶対パスにする（DevToolsで正しく辿れる）
    devtoolModuleFilenameTemplate: "[absolute-resource-path]",
  },
  module: {
    rules: [
      // sassのコンパイル設定
      {
        test: /\.(sa|sc|c)ss$/, // 対象にするファイルを指定
        use: [
          {
            loader: MiniCssExtractPlugin.loader, // JSとCSSを別々に出力する
          },
          // ▼CSSをバンドルするためのローダー
          {
            loader: "css-loader",
            options: {
              // CSS内のurl()メソッドの取り込みを禁止
              url: false,
              // postcss-loader と sass-loader の場合は2を指定
              importLoaders: 2,
              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              sourceMap: enabledSourceMap,
            },
          },
          // ▼PostCSS（autoprefixer）のための設定
          {
            loader: "postcss-loader",
            options: {
              // autoprefixerの行挿入で位置がズレないようマップを引き継ぐ
              sourceMap: enabledSourceMap,
              postcssOptions: {
                // Autoprefixer+gridのベンダープレフィックスを有効化
                plugins: [require("autoprefixer")({ grid: true })],
              },
            },
          },
          // ▼Sass を CSS へ変換するローダー
          {
            loader: "sass-loader",
            options: {
              sourceMap: enabledSourceMap,
              sassOptions: {
                outputStyle: "expanded",
              },
            },
          },
          // 下から順にコンパイル処理が実行されるので、記入順序に注意
        ],
      },
    ],
  },
  plugins: [
    new FixStyleOnlyEntriesPlugin(), // CSS別出力時の不要JSファイルを削除
    // CSSをJSにバンドルせず、別ファイルにわける
    new MiniCssExtractPlugin({
      // CSSの出力先
      filename: "[name].css", // 出力ファイル名を相対パスで指定（[name]にはentry:で指定したstylesが入る）
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [new CssMinimizerPlugin()],
  },
  // ▼production モード以外の場合は source-map タイプのソースマップを出力
  devtool: enabledSourceMap ? "source-map" : "eval",
  // 監視（watch）対象から除外するファイル
  watchOptions: {
    ignored: ["/assets/images/", "/node_modules/"],
  },
  // webpack起動時にターミナルにオススメ情報がでるのを停止
  performance: { hints: false },
};
