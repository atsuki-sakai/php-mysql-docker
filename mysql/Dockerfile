FROM mysql:8.0

# データベースを作成するコマンドをDockerで実行
# /docker-entrypoint-initdb.b/init.sql
COPY init.sql /docker-entrypoint-initdb.d/init.sql

# コンテナ内の環境変数を設定
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=test_db
ENV MYSQL_USER=test
ENV MYSQL_PASSWORD=test123

#ボリューム
# /var/lib/mysqlはmysqlを使うと自動でコンテン内に作られる
VOLUME ./data:/var/lib/mysql