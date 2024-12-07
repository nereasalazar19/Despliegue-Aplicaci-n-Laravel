<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/nereasalazar19/Despliegue-Aplicacion-Laravel.git');
set('application', 'futbol-femeni');
set('git_tty', true);
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('34.198.33.157')
 ->set('deploy_path', '/var/www/prod-ud4-a4/html')
 ->set('remote_user', 'prod-ud4-deployer')
 ->set('identity_file', '~/.ssh/id_rsa');

// Hooks
task('build', function () {
    run('cd {{release_path}} && build');
});


after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'artisan:migrate');
