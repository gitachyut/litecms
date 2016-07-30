<?php
namespace litecms;
use litecms\app\app as app;

class Cmsinit{
  const CONSTANT = 'constant value';
  public function __construct(){
    global $db ;
    $db = ['host'=>'localhost','user'=>'root','pass'=>'12345','database'=>'litecms'];
    new app();
  }

}
