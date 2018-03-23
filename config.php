<?php
return [
    'server' => 'localhost/project/job',
    'database' => [
        'host' => 'localhost',
        'db_name' => 'applyjob',
        'username' => 'root',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
//    'mail'=>[
//        'host'=>'mail.sinphyukyun.com',
//        'port'=>'26',
//        'username'=>'support@sinphyukyun.com',
//        'password'=>'spk@123456',
//    ]
    'mail'=>[
        'host'=>'smtp.gmail.com',
        'port'=>'587',
        'username'=>'evokyaw@gmail.com',
        'password'=>'man31153',
    ]
];