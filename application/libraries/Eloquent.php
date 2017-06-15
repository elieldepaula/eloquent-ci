<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Esta classe faz a configuração do Eloquent.
 *
 * @author Eliel de Paula <dev@elieldepaula.com.br>
 */
class Eloquent
{

    function __construct()
    {

        $config['db'] = array(
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'databasename',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        );

        $capsule = new Capsule;
        $capsule->addConnection($config['db']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }
}