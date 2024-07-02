＃ability-test

##環境構築
Dockerビルド
1.git clonegit@github.com:coachtech-material/laravel-docker-template.git

2.docker-compose up -d --build
    docker-compose.ymlファイルのmysqlとphpmyadminに
    platform: Linux/amd64を追加

3.docker-compose exec php bash
4.composer install
5.cp .env.example .env でファイル作成
    .envファイル を下記のように変更
      DB_Host＝mysql
      DB_DATABASE = laravel_db
      DB_USERNAME = laravel_user
      DB_PASSWORD = laravel_pass
6.php artisan key:generation
7.php artisan migrate
8.php artisan db:seed

##使用技術
・PHP ８.０
・Laravel １０.0
・mysql 8.0

###URL
・環境開発：http://localhost/
・phpMyAdmin://localhost:8080/
