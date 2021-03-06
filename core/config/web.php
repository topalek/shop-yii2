<?php

$params = array_merge(
    require __DIR__ . '/params-local.php',
    require __DIR__ . '/params.php'
);
$db = array_merge(
    require __DIR__ . '/db.php',
    require __DIR__ . '/db-local.php'
);

$config = [
    'id'         => 'basic',
    'name'       => 'Magaz',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules'    => [
	    'admin'      => [
            'class'  => 'app\modules\admin\Module',
            'layout' => 'main',
        ],
	    'yii2images' => [
		    'class'                   => 'rico\yii2images\Module',
		    //be sure, that permissions ok
		    //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
		    'imagesStorePath'         => 'uploads/images/store', //path to origin images
		    'imagesCachePath'         => 'uploads/images/cache', //path to resized copies
		    'graphicsLibrary'         => 'GD', //but really its better to use 'Imagick'
		    'placeHolderPath'         => '@webroot/uploads/images/placeHolder.png',
		    // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
		    'imageCompressionQuality' => 85, // Optional. Default value is 85.
	    ],
    ],
    'components' => [
        'request'      => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3LJRrfRaHXHOOQ3xrIbiQmKAxC0i0H79',
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'user'         => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'authManager'  => [
            'class' => 'yii\rbac\DbManager',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'           => $db,

        'urlManager' => [
	        'enablePrettyUrl' => true,
	        'showScriptName'  => false,
	        'rules'           => array_merge(
		        require __DIR__ . '/url.php',
		        require __DIR__ . '/url-local.php'
	        //[
	        //    'class' => 'app\components\urlManagerRule',
	        //]
	        ),
        ],

    ],
    'params'     => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
