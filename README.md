# Dockerfileを使った環境構築



デタッチモードで起動 
```
 - d
```

ポート同士を繋いでアクセスできる様に
```
- p [8080: 公開するポート]:[80: サーバー側のポート]
```

ディレクトリをマウントして変更を同期する
```
-v "$(pwd)"/[src: 公開ファイルのパス]:[/var/www/html: サーバーのドキュメントルート]
```

 コンテナの停止時に自動で削除
 ```
 --rm
 ```

 コンテナの接続するネットワーク名を指定
 ```
 --network [php-mysql-network: ネットワーク名]
 ```

 立ち上げるコンテナ名と元になるイメージを指定
 ```
 --name [run-php-app: コンテナ名] [php-app: イメージ名]
 ```



## イメージの作成　コンテナの作成　ネットワークの作成

コンテナ同士を繋ぐネットワークを作成するコマンド
```
$ docker network create [php-mysql-network: ネットワーク名]
```
新たにイメージを作成
```
$ docker build -t [php-app: イメージ名] [.: Dockerfileのパス]
```

新たにコンテナを作成
```
$ docker container run -d -p 8080:80 --name [run-php-app:コンテナ名] [php-app:元にするイメージ名]
```

変更を同期するためにマウントしてコンテナを立ち上げる
```
$ docker container run -d -p 8080:80 -v "$(pwd)"[/src:/var/www/html:サーバーのドキュメントルート] --name [run-php-app: コンテナ名] [php-app: 元にするイメージ名]
```



## MYSQLコンテナの起動 イメージの作成も同じ方法で出来る

MYSQL用のコンテナを立ち上げる
```
$ docker container run -d --network [php-mysql-network:ネットワーク名] --rm --name [run-php-db:   コンテナ名] [php-db: 元にするイメージ]
```






# Docker-compose.yamlを使った環境構築