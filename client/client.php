<?php


require "vendor/autoload.php";


function greet($name){
	$client = new Hello\HelloClient('localhost:50051',[
		'credentials' => Grpc\ChannelCredentials::createInsecure()
	]);

	$request = new Hello\HelloRequest();
	$request->setMessage($name);
	list($reply, $status) = $client->hello_api($request)->wait();
	
	$message = $reply->getMessage();
	
	return $message;
}

echo greet("aiueo");
