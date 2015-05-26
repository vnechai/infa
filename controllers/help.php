<?php
  class Help extends Controller {
   // код

   public function other($arg = false) {
    // код

    require 'models/help_model.php';
    $model = new Help_Model();
   }
  }