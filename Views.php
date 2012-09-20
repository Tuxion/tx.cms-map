<?php namespace components\map; if(!defined('TX')) die('No direct access.');

class Views extends \dependencies\BaseViews
{

  protected function route_map(){
  
    return $this->module('route_map');
  
  }

}
