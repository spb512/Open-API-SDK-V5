<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/6/17
 * Time: 3:37 PM
 */

use okv5\Config;

// 是否 debug
Config::$debug=0;

Config::$config=[

    // v5 模拟环境 个人账户 key
    "apiKey"=>"",
    "apiSecret"=>"",
    "passphrase"=>"",
//    是否为模拟盘
    "paper"=>1
];
