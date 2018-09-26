@servers(['web-1' => 'root@192.168.0.38', 'web-2' => 'root@192.168.0.199'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
cd /var/www/deploy
git pull origin master
composer install --no-dev
cp .env.production .env
@endtask
