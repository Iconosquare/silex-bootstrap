<?php
namespace Tripnity\DbProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Tripnity\Util;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbProvider
 *
 * @author sylvain
 */
class DbProvider implements ServiceProviderInterface {
    public function register(Application $app)
    {
      $app['db'] = $app->protect(function () {

           return new Util\Db();
        });
    }

    public function boot(Application $app) 
    {
      
    }
}
