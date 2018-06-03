<?php

  namespace Drupal\hello\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class HiController extends ControllerBase { 

    public function sayhello() { 

      return array(
         '#markup' => hello_hi_world(),
      );

    }

  }
