<?php

namespace Tripnity\Tests\Units\Util;

use Tripnity\Tests\Units\Test;

/**
 *
 */
class Db extends Test {
  
  public function testGetConnection()
  {
    $db = new \Tripnity\Util\Db();
    
    $this->assert
      ->string($db->getConnection("mom"))
        ->isIdenticalTo('say: mom');
    
    $this->assert
      ->object($db)
        ->isInstanceOf('\\Tripnity\\Util\\Db');
    
    $this->assert
      ->string($db->getConnection("hello"))
        ->isIdenticalTo('say: Hello WORLD');
  }
  
}

?>
