@servers(['web-1' => 'dahai@192.168.0.38', 'web-2' => 'dahai@192.168.0.199'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
cd /var/www/deploy
git pull origin master
composer install --no-dev
php artisan migrate --force
@endtask
