<?php 
  
namespace Tripnity\Model;

/**
* User
*/
class User
{
  
  protected $username = "jeanluc";
  
  public function getUsername()
  {
    return $this->username;
  }
  
  public function setUsername($username)
  {
    $this->username = $username;
  }
  
  function __construct()
  {
    # code...
  }
}
