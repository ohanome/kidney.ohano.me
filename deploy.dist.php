<?php
namespace Deployer;

require 'deploy.drupal9.php';

// Config

set('repository', 'git@github.com:ohanome/kidney.ohano.me.git');

// Hosts

host('live')
  ->setHostname('kidney.ohano.me') #!
  ->setPort(22) #!
  ->set('branch', '') #!
  ->set('http_user', '') #!
  ->set('remote_user', '') #!
  ->set('deploy_path', ''); #!
