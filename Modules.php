<?php namespace components\map; if(!defined('TX')) die('No direct access.');

class Modules extends \dependencies\BaseViews
{

  protected function route_map($options){
    
    return Data($options)->having('x', 'y')->as_array();
    
  }

}
