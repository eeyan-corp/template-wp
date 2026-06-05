# template-wp

WordPressコーディング用テンプレートリポジトリです。

## ブランチ

| ブランチ  | 概要                                                     |
| --------- | -------------------------------------------------------- |
| `main`    | フル版。レスポンシブmixin・rem換算・表示制御クラスあり   |
| `minimal` | シンプル版。SCSSのベース機能なし、メディアクエリは直書き。独自のSCSS構成にカスタマイズしたい方向け |

使用するブランチをどちらか選んでリポジトリを作成してください。

```bash
# フル版
git clone git@github.com:eeyan-corp/template-wp.git

# シンプル版
git clone -b minimal git@github.com:eeyan-corp/template-wp.git
```

「Use this template」を使う場合、`minimal` を使用するときは「Include all branches」を **On** にしてください。

> ⚠️ リポジトリ作成後に表示される以下のバナーは無視してください。`minimal` を `main` へ**マージしないでください。**
>
> ![minimal PR banner](docs/minimal-pr-banner.png)

---

## セットアップ

### A. 通常環境

1. WP本体を `wp/` に配置・インストール（`wp-content/` はすでに存在するため上書き不要）
2. 管理画面 → 外観 → テーマ から `base` を有効化
3. npm パッケージをインストール

```bash
cd dev
npm install
```

---

### B. Local Sites を使用する場合

#### 1. Local で新規サイト作成

WPが `app/public/` 直下に自動インストールされます。

#### 2. WPファイルを `wp/` フォルダに移動

#### 3. データベースの siteurl を更新

Local の Adminer で `wp_options` テーブルを開き、`siteurl` を以下に変更します。

```
http://localhost:〇〇〇/wp
```

#### 4. `wp/wp-content/` を削除してテンプレートをclone

```bash
rm -rf wp/wp-content/
git init
git remote add origin git@github.com:eeyan-corp/template-wp.git
git fetch origin main
git checkout main
```

#### 5. テーマ・プラグインの有効化・npm インストール

```bash
cd dev
npm install
```

---

## 開発時に使えるコマンド一覧

```bash
cd dev
npm run watch      # SCSS監視・自動コンパイル（開発時）
npm run css-minify # CSS minify（本番用）
npm run image-minify # 画像圧縮（JPG/PNG）
npm run webp       # WebP変換
```

---

## ディレクトリ構成

> 緑色の行は `main` ブランチのみ含まれるファイル・ディレクトリ

```diff
 root/
 ├── index.php
 ├── .htaccess
 ├── assets/
 │   ├── css/                           # コンパイル後のCSS（自動生成）
 │   ├── scss/
 │   │   ├── styles.scss
+│   │   ├── base/                      # レスポンシブmixin・リセットCSS
+│   │   │   ├── shortcut-functions.scss # mixin・関数のエクスポート
+│   │   │   ├── index.scss              # 表示制御クラス生成
+│   │   │   └── libs/
+│   │   │       ├── reset.scss          # リセットCSS（destyle.css）
+│   │   │       ├── responsive.scss     # メディアクエリmixin
+│   │   │       └── rem-base-font-size.scss # rem基準フォントサイズ設定
 │   │   └── site/                      # 案件ごとに編集するファイル
+│   │       ├── variables.scss          # ブレイクポイント・基準幅設定
 │   │       ├── common.scss             # 共通スタイル・カスタムプロパティ
+│   │       ├── modules/                # 共通mixin
+│   │       │   └── hover.scss          # ホバー・フォーカスmixin
 │   │       ├── parts/
 │   │       │   ├── header.scss
 │   │       │   └── footer.scss
 │   │       └── pages/
 │   │           └── top.scss
 │   ├── js/
 │   │   └── script.js
 │   └── images/
 │       ├── common/
 │       └── top/
 ├── dev/              # ビルドツール（webpack）
 └── wp/
     └── wp-content/
         ├── themes/
         │   └── base/ # テンプレートテーマ
         └── plugins/
```
