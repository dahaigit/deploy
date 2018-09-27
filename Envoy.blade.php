@servers(['web-1' => 'root@192.168.0.38', 'web-2' => 'root@192.168.0.199', 'web-3' => 'root@192.168.0.141'])

@task('deploy', ['on' => ['web-1', 'web-2', 'web-3'], 'parallel' => true])
cd /var/www/deploy
git pull origin master
composer install --no-dev
cp .env.production .env
php artisan migrate
@endtask
