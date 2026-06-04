# template-wp

WordPressコーディング用テンプレートリポジトリです。

## ブランチ

| ブランチ | 概要 |
|----------|------|
| `main` | フル版。レスポンシブmixin・rem換算・表示制御クラスあり |
| `minimal` | シンプル版。SCSSのベース機能なし、メディアクエリは直書き |

```bash
# フル版
git clone git@github.com:Takamoto29/template-wp.git

# シンプル版
git clone -b minimal git@github.com:Takamoto29/template-wp.git
```

---

## セットアップ

### 1. WordPress本体の配置

[WordPress公式](https://ja.wordpress.org/download/)からZIPをダウンロードし、展開したファイルを `wp/` ディレクトリに配置します。

```
wp/
├── wp-admin/       ← 配置
├── wp-includes/    ← 配置
├── wp-content/     ← すでに存在（上書き不要）
├── index.php       ← 配置
└── ...
```

### 2. wp-config.php の作成

`wp/wp-config-sample.php` をコピーして `wp/wp-config.php` を作成し、DB情報を設定します。

```php
define( 'DB_NAME', 'データベース名' );
define( 'DB_USER', 'ユーザー名' );
define( 'DB_PASSWORD', 'パスワード' );
define( 'DB_HOST', 'localhost' );
```

### 3. WordPressのインストール

ブラウザで `http://localhost/wp/wp-admin/install.php` にアクセスし、インストールを完了させます。

### 4. テーマの有効化

WordPress管理画面 → 外観 → テーマ から `base` テーマを有効化します。

### 5. npm パッケージのインストール

```bash
cd dev
npm install
```

---

## 開発

```bash
cd dev
npm run watch      # SCSS監視ビルド（開発時）
npm run css-minify # CSS minify（本番用）
npm run image-minify # 画像圧縮（JPG/PNG）
npm run webp       # WebP変換
```

---

## ディレクトリ構成

```
root/
├── index.php
├── .htaccess
├── assets/
│   ├── css/          # コンパイル後のCSS（自動生成）
│   ├── scss/
│   │   ├── styles.scss
│   │   ├── base/     # レスポンシブmixin等（main のみ）
│   │   └── site/     # 案件ごとに編集するファイル
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
