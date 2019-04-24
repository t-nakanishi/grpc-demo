<?php


require "vendor/autoload.php";


function greet($name){
	$client = new Echo\EchoClient('localhost:50051',[
		'credentials' => Grpc\ChannelCredentials::createInsecure()
	]);

	$request = new PBEcho\EchoRequest();
	$request->setName($name);
	list($reply, $status) = $client->SayHello($request)->wait();

	$message = $reply->getMessage();
	
	return $message;
}

echo greet("aiueo");
