<?php

  namespace Drupal\hello_world\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class HelloWorldController extends ControllerBase { 

    public function sayhello() { 

      return array(
         '#markup' => hello_world_hello_world(),
      );

    }

  }
