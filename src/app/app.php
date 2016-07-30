<?php
namespace litecms\app;
class app{
  public function __construct(){
    global $db;
    echo $GLOBALS['bcs'];
    print_r($db);
  }
}
