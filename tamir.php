<?php

ob_start();

define('API_KEY', '');

function bot($method,$datas=[]){

    $url = "https://api.telegram.org/bot".API_KEY."/".$method;

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);

    $res = curl_exec($ch);

    if(curl_error($ch)){

        var_dump(curl_error($ch));

    }else{

        return json_decode($res);

    }

}

$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$cid = $message->chat->id;

$text1 = $message->text;

		if($text1){

		bot('sendMessage',[

	'chat_id'=>$cid,

	    'parse_mode'=>'markdown',

	'text'=>"*BOTDA TAMIRLASH ISHLARI\n OLIB BORILMOQDA!\n\n tez orada yangilab, xabar beramiz *",'reply_markup'=>json_encode([

	'inline_keyboard'=>[

	[['text'=>' Kanalimizga o\'tish ','url'=>'https://t.me/kuylauz']],

	[['text'=>' Hamkor kanal ','url'=>'https://t.me/shaxsiy_kutubxona']]

	]

	])

	]);}

?>





















