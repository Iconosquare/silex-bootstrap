<?php

namespace Tripnity\Tests\Units\Model;

use Tripnity\Tests\Units\Test;
use Tripnity\Model;

/**
* 
*/
class User extends Test
{
  public function testGetUsername()
  {
    $user = new Model\User;
    
    $this->assert
      ->object($user)
         ->isInstanceOf('\\Tripnity\\Model\\User')
         ->hasSize(1)
      ->string($user->getUsername())
        ->isIdenticalTo('jeanluc');
    
    
  }
}
