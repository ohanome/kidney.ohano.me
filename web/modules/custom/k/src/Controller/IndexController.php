<?php

namespace Drupal\k\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class IndexController extends ControllerBase {

  public function frontpage() {
    $allSticker = \Drupal::entityQuery('node')
      ->condition('type', 'sticker')
      ->execute();

    $foundSticker = 0;
    foreach ($allSticker as $nodeId) {
      $node = Node::load($nodeId);
      $found = count($node->get('field_found_by')->referencedEntities()) > 0;
      if ($found) {
        $foundSticker++;
      }
    }

    return [
      '#theme' => 'k_frontpage',
      '#count' => $foundSticker,
      '#max' => count($allSticker),
    ];
  }

}
