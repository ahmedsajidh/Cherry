<?php

/**
 *
 */
class Tools extends Controller{

  public funcion __construct($controller, $action){
    parent::__construct($controller, $action);
    $this->view->setLayout('default');
  }
  public indexAction(){
    $this->view->render('tools/index');
  }
  public firstAction(){
    $this->view->render('tools/first');
  }
  public secondAction(){
    $this->view->render('tools/second');
  }
  public thirdAction(){
    $this->view->render('tools/third');
  }
}
