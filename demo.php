<?php

require_once 'SellerApi.php';

$api = new SellerApi();

$options = array(
	'limit' => 100,
	'sort' => 'asc',
	'page' => 1
);

//$threads = $api->getThreads($options);
//$messages = $api->getMessages(1, $options);
//$allMessages = $api->getAllMessages($options);
//$thread = $api->getThread(1);

//$_FILES = array(
//            'attachment' => array(
//                'name' => 'test.png',
//                'type' => 'image/png',
//                'size' => 9022,
//                'tmp_name' => realpath('test.png'),
//                'error' => 0
//            )
//        );
//
//var_dump($api->sendMessage(1, 'test answer from API', $_FILES));
