<?php

$params = require(__DIR__ . '/params.php');



// $whitelist =


$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'defaultRoute' => '/index/index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '123',
            'enableCookieValidation' => false,
            'enableCsrfValidation' => FALSE,

        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'enableStrictParsing' => true,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // 'mailer' => [
        //     'class' => 'yii\swiftmailer\Mailer',
        //     // send all mails to a file by default. You have to set
        //     // 'useFileTransport' to false and configure a transport
        //     // for the mailer to send real emails.
        //     'useFileTransport' => true,
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info','error', 'warning'],
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.exmail.qq.com',  //每种邮箱的host配置不一样
            'username' => '',
            'password' => '',
            'port' => '587',
            'encryption' => 'tls',
        ],
   'messageConfig'=>[
       'charset'=>'UTF-8',
       'from'=>['it@xxx'=>'opapi']
       ],
],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
    // 'whitelist' => $whitelist,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
	'allowedIPs' => ['127.0.0.1', '::1', '10.1.1.24','10.1.1.36'],
    ];
}

return $config;
