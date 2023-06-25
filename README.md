
## Dockerfileを使った環境構築

## イメージの作成　コンテナの作成　ネットワークを作成

// コンテナ同士を繋ぐネットワークを作成するコマンド

$ docker network create [php-mysql-network:ネットワーク名]

//　イメージを作成

$ docker build -t [php-app:イメージ名] [.:Dockerfileのパス]

// コンテナを作成

$ docker container run -d -p 8080:80 --name [run-php-app:コンテナ名] [php-app:元にするイメージ名]

// 変更を同期するためにマウント

$ docker container run -d -p 8080:80 -v "$(pwd)"[/src:/var/www/html:サーバーのドキュメントルート] --name s[run-php-app:コンテナ名] [php-app:元にするイメージ名]

## MYSQLコンテナの起動 イメージの作成も同じ方法で出来る


//MYSQLコンテナを立ち上げる

$ docker container run -d --network [php-mysql-network:ネットワーク名] --rm --name [run-php-db:コンテナ名] [php-db: 元にするイメージ]


## Docker コマンドオプション


 - d \ デタッチモードで起動

 - p [公開するポート]:[サーバー側のポート] \ ポート同士を繋いでアクセスできる様に

 -v "$(pwd)"/[公開ファイルのパス]:[サーバーのドキュメントルート] \ ディレクトリをマウントして変更を同期

 --rm \ コンテナの停止時に自動で削除

 --network [ネットワーク名] \ コンテナの接続するネットワーク名を指定

 --name [コンテナ名] [イメージ名] \ コンテナ名と元になるイメージを指定


## Docker-compose.yamlを使った環境構築