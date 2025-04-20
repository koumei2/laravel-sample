# Laravel sample

Laravel を使った個人的なサンプル。
以降に記載した内容を実施したもの。

---

## Laravel のプロジェクト作成

```
composer create-project laravel/laravel laravel-sample --prefer-dist
cd laravel-sample
```

## Breeze インストール

```
composer require laravel/breeze --dev
artisan breeze:install blade
```

日本語化
```
composer require askdkc/breezejp --dev
artisan breezejp
```


## DB 設定

デフォルトでは sqlite を使う設定となっているので、docker 環境で稼働させている MySQL を使うよう設定する。
- docker 環境整備
- .env ファイルを適宜設定
- １つ上のディレクトリで docker compose up で MySQL 起動

DB 初期設定
```
artisan migrate
```

## AdminLTE のプラグインをインストール

```
composer require jeroennoten/laravel-adminlte
artisan adminlte:install
```

## その他変更

- トップページをまっさらに
- 認証が必要なページは管理ページとし、/admin をベースとした
- 管理画面への初期ログインアカウントは admin@localhost / password で作成


# 実行方法

開発サーバを起動
```
artisan serve
```


# その他

blade 改行対応
https://hotexamples.com/examples/-/Blade/setEchoFormat/php-blade-setechoformat-method-examples.html
