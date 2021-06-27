<?php

ob_start();//

//require_once("vendor/autoload.php");

define('API_KEY','');

$kanal = '@kuyla_teleloyihasi1'; 



   function ty($ch){ 

   return bot('sendChatAction', [

   'chat_id' => $ch,

   'action' => 'typing',

   ]);

} 

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

function del($nomi){

   array_map('unlink', glob("$nomi"));

   }



$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$mid = $message->message_id;

$cid = $message->chat->id;

$name = $message->from->first_name;

$username = $message->from->username;

$id = $message->from->id;

$tx = $message->text;

$admin = '@fatyugap';//@regfas';

$folder = "azo"; 





 $gett = bot('getChatMember',[

  'chat_id' =>$kanal,

  'user_id' => $id

  ]);

  $gget = $gett->result->status;



  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

  

if (!file_exists($folder/$cid)) { 

  mkdir($folder); 

  mkdir($folder."/$cid");



}

$key = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"🎙  Ovoz jo'natish 🎙"],],[['text'=>"📝  Fikr yo'llash  📝"],],[['text'=>"📖 Ma'lumot 📖"],], 

]

]); 

$key1 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"📤📝  Fikrni jo'natish  📝📤"],],[['text'=>"🔙 Orqaga 🔙"],], 

]



]);

$key3 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"📤🎵  Ovozni jo'natish  📤🎵"],],[['text'=>"🔙 Orqaga 🔙"],], 

]

]);

$key2 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"🔙 Orqaga 🔙"],],

]

]);

$key4 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"/start"],],

]

]);

if($tx == "🔙 Orqaga 🔙"){

	ty($cid);

 bot('sendMessage',[ 

     'chat_id'=>$cid,'resize_keyboard'=>true,

     'parse_mode'=>'markdown',

       'message_id'=>$mid,

       'text'=>"*\nBo'limlardan birini tanlang \n                       \n*",

'reply_to_message_id'=>$mid,

'reply_markup'=>$key,

      ]); 

	}

 

 

	

	if($tx == "/start"){

		ty($cid);

	 bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"Salom *$name* \n\n  🎙* KUYLA teleloyihasi*🎙\n telegram botiga xush kelibsiz!!!\n\n Bo'limlardan birini tanlang.\n Har bir buyrug'ingiz e'tiborda!!!",

	'reply_markup'=>$key, 

	      ]); 

		}

	if($tx == "🎙  Ovoz jo'natish 🎙"){

		ty($cid);

		bot('sendMessage',[ 

	        'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

	        'message_id'=>$mid,

	        'text'=>"*Ovozingiz* \nKUYLA *teleloyihasi* \ntelegram kanaliga tushadi!!!\n\nISMINGIZNI JO'NATING\n\nNamuna:\n*#ism*\n \n(ism oldida ( # ) bo'lishi kerak!!!')",

			'reply_to_message_id'=>$mid,

			'reply_markup'=>$key2, 

	      ]);}

	      if($message -> text and $tx[0]=='#'){

	      	ty($cid);

	      	del("$folder/$cid/text.txt");

			 file_put_contents("$folder/$cid/text.txt",$tx);

			bot('sendMessage',[

			'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

			'text'=>"*#ISM qo'shildi*\n Endi \n\n*TELEGRAMDA YOZILGAN* \n\novoz jo'nating.\n Aks holda qabul qilinmaydi!"

			]);

		}

	if($message -> voice ){

		ty($cid);

	$sdf=file_get_contents("$folder/$cid/text.txt");

	$vois=$message->voice->file_id;

	del("$folder/$cid/voice.txt");

	 file_put_contents("$folder/$cid/voice.txt",$vois);

	 bot('sendMessage',[

			'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

			'text'=>"*Ovoz qo'shildi*\n \n *📤🎵  Ovozni jo'natish  📤🎵* buyrug'ini tanlang!"

			]);

	bot('sendVoice',[

		'chat_id'=>$cid,

		'caption'=>$sdf,

		'voice'=>$vois,

		'reply_to_message_id'=>$mid,

		'reply_markup'=>$key3 

		]);

	}

	

	if($tx == "📤🎵  Ovozni jo'natish  📤🎵"){

		ty($cid);

		$afg=file_get_contents("$folder/$cid/text.txt");

		$afg.="\n Men ham o'z qobiliyatimni namoyish qildim. \n\n https://t.me/joinchat/AAAAAEUogtJ5FDPifNATgg\n    @kuylabot ";

			bot('sendVoice',[

		'chat_id'=>$kanal,

		'caption'=>$afg,

		'voice'=>file_get_contents("$folder/$cid/voice.txt")

		]); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*jo'natildi*",

		'reply_to_message_id'=>$mid,

		'reply_markup'=>$key, ]);

	}

	/////////////////



	if($tx == "📝  Fikr yo'llash  📝"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Fikringizni oldiga ? belgisini qo'yib, jo'nating. \n\n Namuna:\n*?Salom yangiliklardan ham kanalga tashlang *\n\nAks holda qabul qilinmaydi!\n\nDIQQAT!!! fikrlar admin tomonidan\n o'qib chiqiladi,lekin javob qaytarilmaydi!!!\nFaqat inobatga olinadi.", 

		'reply_markup'=>$key2

	      ]); 

	     

	}  if($message->text and $tx[0]=="?"){

		ty($cid);

		  file_put_contents("$folder/$cid/kom.txt",$tx);

		   bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Xabar qabul qilindi.\n jo'natish uchun:\n *📤📝  Fikrni jo'natish  📝📤* \ntugmasini bosing", 

		'reply_markup'=>$key1

	      ]);

		  }

	if($tx == "📤📝  Fikrni jo'natish  📝📤"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*jo'natildi*",

		'reply_to_message_id'=>$mid,

		'reply_markup'=>$key, ]);



	$admga=file_get_contents("$folder/$cid/kom.txt");

	       bot('sendMessage',[

	        'chat_id'=>$admin,

		    'parse_mode'=>'markdown', 

		    'text'=>"ismi:[$name],\nadd:@[$username]\nid:[$cid]\n dan xabar:\n\n[$admga] "

	      ]);

	      

	}









	///////////



	if($tx == "📖 Ma'lumot 📖"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*Ma'lumot bo'limi hali aktivlashgani yo'q. \n\n Quyidan kerakli bo'limni tanlang*",

		'reply_markup'=>$key,

		'reply_markup'=>json_encode([

		'inline_keyboard'=>[

	[['text'=>'🎙 Hamkor 🎙','url'=>'https://telegram.me/shaxsiy_kutubxona']]

	]

	    ]) 

	      ]); 

	} 





}

else{

	bot('sendMessage',[

	'chat_id'=>$cid,

	    'message_id'=>$mid,

	'text'=>" Kanalga a'zo bolmasdan \nbotdan foydalana olmaysiz!!!\n\nA'zo bo'lib qaytadan start buyrug'ini bosing.",'reply_markup'=>json_encode([

	'inline_keyboard'=>[

	[['text'=>' Azo bo\'lish ','url'=>'https://t.me/regfas']]

	]

	]),'reply_to_message_id'=>$

	]);

}



?>