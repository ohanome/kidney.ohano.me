<?php
namespace Deployer;

require 'deploy.drupal9.php';

// Config

set('repository', 'git@github.com:ohanome/kidney.ohano.me.git');
#set('bin/php', '/opt/plesk/php/8.1/bin/php');
#set('bin/composer', '/usr/bin/composer');

// Hosts

host('live')
  ->setHostname('kidney.ohano.me') #!
  ->setPort(22) #!
  ->set('branch', '') #!
  ->set('http_user', '') #!
  ->set('remote_user', '') #!
  ->set('deploy_path', ''); #!
