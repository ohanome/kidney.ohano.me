<?php

namespace Drupal\k\Controller;

use Drupal\Core\Controller\ControllerBase;

class IndexController extends ControllerBase {

  public function frontpage() {
    return [
      '#theme' => 'k_frontpage',
      '#variables' => [
        'count' => 16,
        'max' => 20,
      ],
    ];
  }

}
