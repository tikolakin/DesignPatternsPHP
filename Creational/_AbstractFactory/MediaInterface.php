<?php

namespace DesignPatterns\Creational\_AbstractFactory;

abstract interface MediaInterface {
  
  /**
   * some crude rendering from JSON or html output (depended on concrete class).
   *
   * @return string
   */
  public function render();
  
}