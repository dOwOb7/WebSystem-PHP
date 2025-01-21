# webシステム設計演習2024後期-A2-Project3
# シフト管理システム

<div id="top"></div>

## 使用技術一覧
<p style="display: inline">
<!-- バックエンドの言語一覧 -->
    <img src="https://img.shields.io/badge/-Php-777BB4.svg?logo=php&style=plastic">
<!-- バックエンドのフレームワーク一覧 -->
    <img src="https://img.shields.io/badge/-Laravel-E74430.svg?logo=laravel&style=plastic">
    <img src="https://img.shields.io/badge/-MariaDB-4479A1.svg?logo=mysql&style=plastic">
</p>

## 目次

1. [プロジェクトについて]
2. [環境]
3. [ディレクトリ構成]
4. [開発環境構築]
5. [トラブルシューティング]

## プロジェクト名
シフト管理のプロトタイプ

## プロジェクトについて
従業員のシフトを管理することができる。

<p align="right">(<a href="#top">トップへ</a>)</p>

## 環境
| 言語・フレームワーク  | バージョン |
|---------------------| ---------- |
| Php                 | 8.12.2     |
| Laravel             | 11.38.2    |
| MariaDB             | 10.43.2    |

## ディレクトリ構成

```
.
|   .env
|   README.md
|   
+---app
|   +---Http
|   |   +---Controllers
|   |   |       Controller.php
|   |   |       ShiftController.php
|   |   \---Requests
|   |           ShiftRequest.php
|   |
|   +---Models
|           Shift.php
|           User.php
|   
+---database 
|   +---factories
|   |       UserFactory.php
|   +---migrations
|           0001_01_01_000000_create_users_table.php
|           0001_01_01_000001_create_cache_table.php
|           0001_01_01_000002_create_jobs_table.php
|           2025_01_13_134153_create_shifts_table.php
|           2025_01_13_180400_add_name_to_shifts_table.php
|
+---public
|       .htaccess
|       favicon.ico
|       index.php
|       robots.txt
|
+---resources
|   +---css
|   |       app.css
|   +---js
|   |       app.js
|   |       bootstrap.js
|   \---views
|       |   welcome.blade.php
|       +---layouts
|       |       app.blade.php
|       \---shifts
|               create.blade.php
|               edit.blade.php
|               index.blade.php
|
+---routes
|       console.php
|       web.php
|
+---tests
    |   TestCase.php
    +---Feature
    |       ExampleTest.php
    |       ShiftTest.php
    \---Unit
            ExampleTest.php
```

<p align="right">(<a href="#top">トップへ</a>)</p>


## 開発環境構築
### コンテナの作成と起動

1. **XamppとCompose のインストール**
    
- Xampp と Composer をインストールしてください。

2. **依存関係のインストール**

    ```bash
    composer install
    npm install
    ```
3. **Laravel のプロジェクト作成**

- Composerを使用してLaravelプロジェクトを作成します。

    ```bash
    composer create-project --prefer-dist laravel/laravel shift-management
    ```

4. **データベースの設定とマイグレーション**
- データベースの作成や編集、削除などを管理する方法として、PHPフレームワークのLaravelには「マイグレーション」というものが備わっている。
- 正しくコードを書くと、だれが、いつ、どういった目的でテーブルの作成・編集・削除を行ったのかがわかる。

    ```bash
    php artisan migrate
    ```

5. **サーバーの起動**
    ```bash
    php artisan serve
    ```
- `http://127.0.0.1:8000` にアクセスして動作を確認できます。

### 動作確認
- `http://127.0.0.1:8000` にアクセスし、動作を確認してください。

### コンテナの停止

```bash
php artisan down
```

---

## トラブルシューティング

- **マイグレーションエラーが発生した場合:**
    ```bash
    php artisan migrate:refresh --seed
    ```

- **キャッシュクリア:**
    ```bash
    php artisan config:clear
    php artisan cache:clear
    ```

## その他特記事項
助けて

<p align="right">(<a href="#top">トップへ</a>)</p>
