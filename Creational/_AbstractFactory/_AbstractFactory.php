<?php

namespace DesignPatterns\Creational\_AbstractFactory;

abstract class _AbstractFactory {
  
  /**
   * Create text component
   * @param string $content
   * @return Text
   */
  abstract function createText($content);
  
  /**s
   * Create picture component
   * @param string $path
   * @param string $name
   * @return Picture
   */
  abstract function createPicture($path, $name = '');
  
}