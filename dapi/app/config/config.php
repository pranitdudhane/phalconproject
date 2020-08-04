<?php
header('Access-Control-Allow-Origin: *');
ini_set("display_errors","1");
$config = new Phalcon\Config(array(
    'js' => array(
        'version'=>'1.0'
    ),
    'api' => array(
        'version'=>'1.0'
    ),
    'timezone' => array(
        'default' => 'Asia/Kolkata'
    ),
    'database' => array(
        'adapter' => 'pdoType',
        'host' => 'localhost',
        'username' => 'root', 
        'password' => '', 
        'dbname' => 'testdb',    
        'timestamp_dbformat' => 'Y-m-d H:i:s'
    ),
    
    'phalcon' => array(    
        'controllersDir' => '/../app/controllers/',
        'modelsDir' => '/../core/models/',
        'libraryDir' => '/../core/library/',
        'viewsDir' => '/../app/views/',
        'cacheDir' => '/../app/cache/',
        'baseUri' => '/bigbets/'
    ),
    'models' => array(
        'metadata' => array(
            'adapter' => 'Apc',
            'lifetime' => 86400
        )
    ),
    'imgConfig' => array(
        'fileFormat' => '.jpeg'
    ),

	'errorCodes' => array(
        'BS100' => 'Session Expired, Please Login Again',
        'BS104' => 'Invalid Username or Password.',
        'BS105' => 'Login Succesful.',
        'BS106' => 'Unable to create token.',
        'BS107' => 'User does not exists.',
        'BS113' => 'User created successfully.',
        'BS114' => 'Unable to insert record.',
        'BS117' => 'Unable to insert data into log.',
        'BS120' => 'Record does not exists!',
        'BS123' => 'User does not exists!',
        'BS124' => 'Invalid old password!',

	),
));
