<?php

namespace Tripnity\Tests\Units\Model;

use Tripnity\Tests\Units\Test;

/**
* 
*/
class User extends Test
{
  public function testGetUsername()
  {
    $this->assert
      ->string('lol')
        ->isIdenticalTo('lol');
  }
}
