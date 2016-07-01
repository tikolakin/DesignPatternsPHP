<?php

namespace DesignPatterns\Creational\_AbstractFactory;

abstract class Picutre implements MediaInterface {
  
  protected $path;
  
  protected $name;
  
  public function __construct($path, $name = '') {
    $this->path = (string) $path;
    $this->name = (string) $name;
  }
  
}