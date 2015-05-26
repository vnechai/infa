<?php
  class Index extends Controller{
   public function __construct() {
       parent::__construct();
       $this->view->msg = "Мы в контроллере INDEX";
       $this->view->render('index/index');
   }
  }