<?php


define('MultSerial',"5541814646:AAF9FepVd2iqm2fK8d1zgZa0riP3k7aKUXA");

$admin = "5031002143";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".MultSerial."/".$method;
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

function typing($cid){ 
    return bot("sendChatAction",[
    "chat_id"=>$cid,
    "action"=>"typing",
    ]);
    }
    
    
    function joinchat($chatid){
    global $name, $cmid;
    $result = bot('getChatMember',[
    'chat_id'=>"@ssggssghsg",
    'user_id'=>$chatid
    ])->result->status;
    

    if($result == "creator" or $result == "administrator" or $result == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>$ccid,   
        'message_id'=>$cmid,
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"🔐 <b><a href='https://t.me/ssggssghsg'></a> ga obuna bo'lmasangiz botdan foydalana olmaysiz!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}
    
    $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
    $inlinequery = $update->inline_query;
    $inline_id = $inlinequery->id;
    $cal = $update->callback_query;
    $inlinesi = $cal->data;
    $cid2 = $cal->message->chat->id;
    $inlineid = $inlinequery->from->id;
    $inline_query = $inlinequery->query;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";

$stat = file_get_contents("stat/usid.txt");
$reply = $message->reply_to_message->text;
$nomer = $message->contact->phone_number;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = bot('getme',['bot'])->result->username;
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;

$asosiy_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"103❤"]],
[['text'=>"🔙 Orqaga"]],
]
]);

$panel = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[  
[['text'=>"🗂 Skript"],['text'=>"/start"]],
[['text'=>"🔐 Blok tizimi"],['text'=>"🗄 Majburiy obuna"],['text'=>"📝 Pochta tizimi"]],
    ]
]);

$start = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🐼 Kung-Fu Panda"]],[['text'=>"📨 Bog‘lanish"]],
]
]);

$𝙛𝙖𝙨𝙡𝙞𝙢𝙪𝙯 = json_encode([
'inline_keyboard'=>[
[['text'=>"🗂1-𝙌𝙞𝙨𝙢",'callback_data'=>"1qism"],
['text'=>"🗂2-𝙌𝙞𝙨𝙢",'callback_data'=>"2qism"],['text'=>"🗂3-𝙌𝙞𝙨𝙢",'callback_data'=>"3qism"]],
[['text'=>"🗂4-𝙌𝙞𝙨𝙢",'callback_data'=>"4qism"],['text'=>"🗂5-𝙌𝙞𝙨𝙢",'callback_data'=>"5qism"],
['text'=>"🗂6-𝙌𝙞𝙨𝙢",'callback_data'=>"6qism"]],
[['text'=>"🗂7-𝙌𝙞𝙨𝙢",'callback_data'=>"7qism"],['text'=>"🗂8-𝙌𝙞𝙨𝙢",'callback_data'=>"8qism"],
['text'=>"🗂9-𝙌𝙞𝙨𝙢",'callback_data'=>"9qism"]],[['text'=>"🗂10-𝙌𝙞𝙨𝙢",'callback_data'=>"10qism"],['text'=>"🗂11-𝙌𝙞𝙨𝙢",'callback_data'=>"11qism"],
['text'=>"🗂12-𝙌𝙞𝙨𝙢",'callback_data'=>"12qism"]],[['text'=>"🗂13-𝙌𝙞𝙨𝙢",'callback_data'=>"13qism"],
['text'=>"🗂14-𝙌𝙞𝙨𝙢",'callback_data'=>"14qism"],['text'=>"🗂15-𝙌𝙞𝙨𝙢",'callback_data'=>"15qism"]],
[['text'=>"🗂16-𝙌𝙞𝙨𝙢",'callback_data'=>"16qism"],
['text'=>"🗂17-𝙌𝙞𝙨𝙢",'callback_data'=>"17qism"],['text'=>"🗂18-𝙌𝙞𝙨𝙢",'callback_data'=>"18qism"]],
[['text'=>"🗂19-𝙌𝙞𝙨𝙢",'callback_data'=>"19qism"],['text'=>"🗂20-𝙌𝙞𝙨𝙢",'callback_data'=>"20qism"],
['text'=>"🗂21-𝙌𝙞𝙨𝙢",'callback_data'=>"21qism"]],
[['text'=>"🗂22-𝙌𝙞𝙨𝙢",'callback_data'=>"22qism"],['text'=>"🗂23-𝙌𝙞𝙨𝙢",'callback_data'=>"23qism"],
['text'=>"🗂24-𝙌𝙞𝙨𝙢",'callback_data'=>"24qism"]],[['text'=>"🗂25-𝙌𝙞𝙨𝙢",'callback_data'=>"25qism"],
['text'=>"🗂26-𝙌𝙞𝙨𝙢",'callback_data'=>"26qism"]],
]
]);

$madagascar = json_encode([
'inline_keyboard'=>[
[['text'=>"         Madagaskar 1        ",'callback_data'=>"madagaskar1"],
['text'=>"        Madagaskar 2         ",'callback_data'=>"madagaskar2"],],
[['text'=>"         Madagaskar 3         ",'callback_data'=>"madagaskar3"],],
]
]);

$sonic = json_encode([
'inline_keyboard'=>[
[['text'=>"🎆360 HD",'callback_data'=>"Sonic360"],],
[['text'=>"🎆480 HD",'callback_data'=>"Sonic480"],],
[['text'=>"🎆720 HD",'callback_data'=>"SonicHD"],],
]
]);

$kung_fu = json_encode([
'inline_keyboard'=>[
[['text'=>"🗂1-𝙌𝙞𝙨𝙢",'callback_data'=>"1kung_fu"],
['text'=>"🗂2-𝙌𝙞𝙨𝙢",'callback_data'=>"2kung_fu"],['text'=>"🗂3-𝙌𝙞𝙨𝙢",'callback_data'=>"3kung_fu"]],
[['text'=>"🗂4-𝙌𝙞𝙨𝙢",'callback_data'=>"4kung_fu"],['text'=>"🗂5-𝙌𝙞𝙨𝙢",'callback_data'=>"5kung_fu"],
['text'=>"🗂6-𝙌𝙞𝙨𝙢",'callback_data'=>"6kung_fu"]],
[['text'=>"🗂7-𝙌𝙞𝙨𝙢",'callback_data'=>"7kung_fu"],['text'=>"🗂8-𝙌𝙞𝙨𝙢",'callback_data'=>"8kung_fu"],
['text'=>"🗂9-𝙌𝙞𝙨𝙢",'callback_data'=>"9kung_fu"]],[['text'=>"🗂10-𝙌𝙞𝙨𝙢",'callback_data'=>"10kung_fu"],['text'=>"🗂11-𝙌𝙞𝙨𝙢",'callback_data'=>"11kung_fu"],
['text'=>"🗂12-𝙌𝙞𝙨𝙢",'callback_data'=>"12kung_fu"]],[['text'=>"🗂13-𝙌𝙞𝙨𝙢",'callback_data'=>"13kung_fu"],
['text'=>"🗂14-𝙌𝙞𝙨𝙢",'callback_data'=>"14kung_fu"],['text'=>"🗂15-𝙌𝙞𝙨𝙢",'callback_data'=>"15kung_fu"]],
[['text'=>"🗂16-𝙌𝙞𝙨𝙢",'callback_data'=>"16kung_fu"],
['text'=>"🗂17-𝙌𝙞𝙨𝙢",'callback_data'=>"17kung_fu"],['text'=>"🗂18-𝙌𝙞𝙨𝙢",'callback_data'=>"18kung_fu"]],
[['text'=>"🗂19-𝙌𝙞𝙨𝙢",'callback_data'=>"19kung_fu"],['text'=>"🗂20-𝙌𝙞𝙨𝙢",'callback_data'=>"20kung_fu"]],
/*['text'=>"🗂21-𝙌𝙞𝙨𝙢",'callback_data'=>"21kung_fu"]],
[['text'=>"🗂22-𝙌𝙞𝙨𝙢",'callback_data'=>"22kung_fu"],['text'=>"🗂23-𝙌𝙞𝙨𝙢",'callback_data'=>"23kung_fu"],
['text'=>"🗂24-𝙌𝙞𝙨𝙢",'callback_data'=>"24kung_fu"]],[['text'=>"🗂25-𝙌𝙞𝙨𝙢",'callback_data'=>"25kung_fu"],
['text'=>"🗂26-𝙌𝙞𝙨𝙢",'callback_data'=>"26kung_fu"]],*/
]
]);

if ($tx == "/start"){
 if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b> $name 🖥 Asosiy menyudasiz✔</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$start
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' =>"<b> $name  🖥 Asosiy menyudasiz</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$start
        ]);
    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
        file_put_contents("stat/$fid.stat", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
        unlink("stat/$fid.stat");
    }
    }
}

if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

if($referalcid == true){
$olmos = file_get_contents("referal/$referalcid.txt");
$olmoslar = $olmos + 1000;
file_put_contents("referal/$referalcid.txt", $olmoslar);
$odam = file_get_contents("stat/$referalcid1.txt");
$odamlar = $odam + 1;
file_put_contents("stat/$referalcid1.txt", $odamlar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
         unlink("stat/$fid.stat");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>🖥 Asosiy menyudasiz</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$start
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"😠 $name Siz hali kanalimizga aʼzo boʻlmadingiz! ",
        "show_alert"=>true,
        ]);
file_put_contents("idlar.txt",$ids+1);
file_put_contents("data/$cid.id", $ids +1);
    }
}

if($tx == "🔙 Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>💻 Asosiy Menu</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$start
    ]);
}

if($tx == "103❤" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>👨‍💻Raxmat...</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$start
    ]);
}

if($tx == "➕❤O323❤➕"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b> $name Salom bu bo‘limda hech narsa yo‘q
Agar malol kelmasa 1ta ❤ like bosvoring!!</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$asosiy_menu
    ]);
}

if($tx == "🐼 Kung-Fu Panda" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>🐼 Kung-Fu Panda</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$kung_fu
    ]);
}

if($tx == "🦁 Madagaskar" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>🎬 ➺ Madagaskar
#premyera
🇺🇿 ➺ O'zbek Tilida [480p/HD]
⚔ ➺ Janri: Komediya, Sarguzasht,
$botname</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$madagascar
    ]);
}

if($tx == "⚡️ Sonik" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>Sonikning Sarguzashtlari</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$sonic
    ]);
}

if($tx == "/yangi" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "🗂 Barcha  Qismlar Quyidagi Tugmalarni Tanlang",
'parse_mode'=>'html',
'reply_markup'=>$𝙛𝙖𝙨𝙡𝙞𝙢𝙪𝙯
]);
}

if($text == "📨 Bog‘lanish" and joinchat($fid)=="true"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Xabaringizni kiriting!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Xabaringizni kiriting!"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔏 Murojat kelib tushdi.

🔐 Murojatchi :  <a href = 'tg://user?id=$uid'>$name</a>
🔐 Foydalanuvchi : @$user
🔐 Id raqami : <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖
$text

➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"_📚 Murojatingiz adminga yuborildi. Noto'g'ri shikoyat uchun ban olishingiz mumkin 🔐_
*• 12 soat ichida javobni olasiz √*",
'parse_mode'=>"markdown",
'reply_markup'=>$start,
]);
}
/*Admin Paneli*/
if($tx == "📊Statistika"){
$time=date('H:i:s',strtotime('2 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("2 hour"));
$baza = file_get_contents("idlar.txt");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"👥 Bot foydalanuvchilari: $baza ta!
     
⏰ $time 📆$sana",
     'parse_mode'=>'html',
     'reply_markup'=>$kalt,
     ]);
     }

if(($tx == "/panel") and $cid == $admin){
    bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$mid]);
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"<b>👨‍💻Admin panelga xush kelibsiz.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$panel,
]);
}

if($tx=="🗂 Skript"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
'caption'=>"$botname",
]);
}
}







/*Tugashi*/
if($data == "Sonic480"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/53",
'caption'=>"🎬 ➺ Sonik (2020) #premyera
🇺🇿 ➺ O'zbek Tilida [480p/HD]
🌍 ➺ Davlati: AQSH, Yaponiya, Kanada
⚔ ➺ Janri: Jangari, Fantastika, Komediya, Sarguzasht, Oilaviy
$botname",
]);
}

if($data == "SonicHD"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/52",
'caption'=>"🎬 ➺ Sonik (2020) #premyera
🇺🇿 ➺ O'zbek Tilida [720p/HD]
🌍 ➺ Davlati: AQSH, Yaponiya, Kanada
⚔ ➺ Janri: Jangari, Fantastika, Komediya, Sarguzasht, Oilaviy
$botname",
]);
}

if($data == "Sonic360"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/54",
'caption'=>"🎬 ➺ Sonik (2020) #premyera
🇺🇿 ➺ O'zbek Tilida [360p/SD]
🌍 ➺ Davlati: AQSH, Yaponiya, Kanada
⚔ ➺ Janri: Jangari, Fantastika, Komediya, Sarguzasht, Oilaviy
$botname",
]);
}

if($data == "4kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/34",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 4-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "2kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/32",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 2-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "7kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/38",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 7-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "8kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/39",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 8-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "9kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/40",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 9-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "10kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/41",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 10-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "11kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/42",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 11-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "12kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/43",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 12-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "13kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/44",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 13-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "14kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/45",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 14-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "15kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/46",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 15-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "16kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/47",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 16-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "17kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/48",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 17-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "19kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/50",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 19-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "20kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/51",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 20-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "18kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/49",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 18-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "3kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/33",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 3-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "1kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/31",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 1-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: T.me/$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "5kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/37",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 5-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}

if($data == "6kung_fu"){
	        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
	bot('sendMessage',[
 'chat_id'=>$ccid,
 'text'=>"⏳<b>Yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
  sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$ccid,
 'message_id'=>$cmid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid + 1,
  ]);
   sleep(0.3);
bot('sendvideo',[
'chat_id'=>$ccid,
'video'=>"https://t.me/MultSerial_RasmiyBoti/37",
'caption'=>"🎥 Kung Fu Panda: Ajoyib afsonalar 1-fasl 6-qism
📹 Sifati: HD 480p
📆 Yil: 2011
🎞 Janr: Mulserial, Komediya, Sarguzasht
🇺🇸 Davlat: AQSH
🇺🇿 Tarjima: O'zbek tilida
🌐 Bot: @$botname

PS: Multserial kesilmagan orginal holda",
]);
}





?>