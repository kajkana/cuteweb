<?php

  namespace Drupal\d8dev\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class d8devController extends ControllerBase { 

    public function sayhello() { 
        
       $elt = ['#type' => 'markup', '#markup' => 'Hi D8Dev !'];
        /*      
        return array(
         '#markup' => d8dev_hello_world(),
      );
        */
    
       return $elt;
    }

  }
