<?php

return array(
    'server' => 'production',
    'app' => array(
        'name' => 'DScribe Skeleton',
    ),
    'modules' => array(
        /*
          'DsUtil' =>    array (
          'defaults' =>      array (
          'controller' => 'Guest',
          'action' => 'index',
          ),
          'access' =>      array (
          'username' => 'admin',
          'password' => 'admin',
          ),
          ),
         */
        'App' => array(
            'alias' => 'site',
            'defaults' => array(
                'controller' => 'Index',
                'action' => 'index',
            ),
        ),
    ),
    'defaults' => array(
        'module' => 'App',
        'theme' => 'DScribe',
        'defaultLayout' => 'guest',
        'errorLayout' => 'error',
    ),
    'db' => array(
        'development' => array(
            'dsn' => 'mysql:host=localhost;dbname=ds_db',
            'user' => '',
            'password' => '',
            'options' => array(
                'tablePrefix' => 'ds_',
                'create' => true
            )
        ),
        'production' => array(
        ),
    ),
);
