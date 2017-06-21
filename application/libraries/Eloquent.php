<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
        require_once APPPATH . 'config/database.php';
        $config['db'] = array(
            'driver'    => $db['default']['dbdriver'],
            'host'      => $db['default']['hostname'],
            'database'  => $db['default']['database'],
            'username'  => $db['default']['username'],
            'password'  => $db['default']['password'],
            'charset'   => $db['default']['char_set'],
            'collation' => $db['default']['dbcollat'],
            'prefix'    => $db['default']['dbprefix']
        );

        $capsule = new Capsule;
        $capsule->addConnection($config['db']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }
}