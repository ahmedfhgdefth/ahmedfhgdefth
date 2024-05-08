<?php
//=========التوكن=========//
$token = "7173236759:AAHJfah0nL14cs-y_XSU5ARJs7DEICVz0H4"; 
define("API_KEY", $token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
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
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $from_id2 = $update->callback_query->from->id; $username2 = $update->callback_query->from->username; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @FF8FFI =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @FF8FFI =====*/
$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
/*===== dev ~ @FF8FFI =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @FF8FFI =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @FF8FFI =====*/
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
/*===== dev ~ @FF8FFI =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);

$info = json_decode(file_get_contents("admin.json"),1);
$coss = json_decode(file_get_contents("data/carlos.json"),1);
$malke = $coss['malk'];
if($malke == null){
$malkei = $info['id'];
}elseif($malke != null){
$malkei = $malke;
}
$admin = $malkei;
$From_Dev = $info['id'];
$UserDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->username;
$NameDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->first_name;

#############
$admin = "6878836555";
$Dev = array("$admin","6878836555");
$eri = array("$admin","6878836555");
$idbot = "7173236759";
$sudo = "$admin";
$buy = "BJ_PJ";
$DevUser = "@$buy";
$devchink = "PP8P3";
$userbot = "Tyevdgbot";
$chsource = "$devchink";
############
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;

$grouplisturl = $user["grouplist"];
if ($tc == 'group' | $tc == 'supergroup'){
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}

$grouplisturl = $user["grouplist"];
if( $text == "الروابط" or $text == "⋄ روابط الكروبات" or $text == "قائمة روابط الكروبات" or $text == "قائمه روابط الكروبات" or $text == "قائمة الروابط" and $settings["silentlist"]!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$grouplisturl = $user["grouplist"];
for($z = 0;$z <= count($grouplisturl)-1;$z++){
$groupinlink = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$grouplisturl[$z]"));
$grouplinkem = $groupinlink->result;
$result = $result."┇$z-$grouplinkem"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙قائمة الكروبات المفعله : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
-$result",
]);
}
}
###########
if( $text=="/start" &&  $tc == "private" or $text=="⋄ رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ اهلأ عزيزي - [$first_name](tg://user?id=$from_id)
⋄︙ اليك قائمة المطور الخاصه في بوتك
⋄︙ [تحديثات السورس الجديده](https://t.me/PP8P3)",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ نقل الملكية"],['text'=>"⋄ حذف المالك الثاني"]],
[['text'=>"⋄ تحديث السورس"]],
[['text'=>"⋄ تعين الاسم"],['text'=>"⋄ تحديث"],['text'=>"⋄ حذف الاسم"]],
[['text'=>"⋄ قسم كت تويت"],['text'=>"⋄ قسم الاستارت"]],
[['text'=>"⋄ قسم الاذاعه"],['text'=>"⋄ قسم الاوامر"],['text'=>"⋄ قسم الاشتراك"]],
[['text'=>"⋄ الاحصائيات"],['text'=>"⋄ المشتركين"],['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ تفعيل بوت المطور"],['text'=>"⋄ تفعيل بوت الخدمي"]],
[['text'=>"⋄ وضع عدد التفعيل"]],
[['text'=>"⋄ تفعيل الاحصائيات"],['text'=>"⋄ تعطيل الاحصائيات"]],
[['text'=>"⋄ روابط الكروبات"]],
[['text'=>"⋄ تعين كليشة المطور"],['text'=>"⋄ حذف كليشة المطور"]],
[['text'=>"⋄ حظر مجموعه"],['text'=>"⋄ قسم تواصل"]],
[['text'=>"⋄ قسم رد عام"]],
[['text'=>"⋄ تفعيل التبنيه"],['text'=>"⋄ تعطيل التنبيه"]],
[['text'=>"⋄ مسح المكتومين عام"]],
[['text'=>"⋄ مسح قائمة العام"]],
[['text'=>"⋄ المكتومين عام"],['text'=>"⋄ المحظورين عام"]],
[['text'=>"⋄ مسح المحظورين عام"]],
[['text'=>"⋄ ترتيب الاوامر"]],
[['text'=>"⋄ تجربة السورس"],['text'=>"⋄ المطورين الثانويه"]],
[['text'=>"⋄ مسح المطورين الثانويه"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم تواصل"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم العام بالتواصل
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ جلب تواصل"]],
[['text'=>"⋄ تعين تواصل"],['text'=>"⋄ حذف تواصل"]],
[['text'=>"⋄ تعطيل تواصل"],['text'=>"⋄ تفعيل تواصل"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاستارت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تفعيل الاستارت"],['text'=>"⋄ تعطيل الاستارت"]],
[['text'=>"⋄ جلب الاستارت"]],
[['text'=>"⋄ تعين الاستارت"],['text'=>"⋄ حذف الاستارت"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم كت تويت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف كت"],['text'=>"⋄ حذف كت"]],
[['text'=>"⋄ عدد الاسئله"]],
[['text'=>"⋄ مسح الاسئله"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاذاعه"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ الاحصائيات"]],
[['text'=>"⋄ توجيه خاص"]],
[['text'=>"⋄ اذاعه عام"],['text'=>"⋄ اذاعه خاص"]],
[['text'=>"⋄ توجيه عام"]],
[['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ المشتركين"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاوامر"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم تعين الاوامر",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تعين م1"],['text'=>"⋄ تعين م2"]],
[['text'=>"⋄ تعين م3"],['text'=>"⋄ تعين م4"]],
[['text'=>"⋄ تعين م5"],['text'=>"⋄ تعين م6"]],
[['text'=>"⋄ اعادة تعين"]],
[['text'=>"⋄ حذف م1"],['text'=>"⋄ حذف م2"]],
[['text'=>"⋄ حذف م3"],['text'=>"⋄ حذف م4"]],
[['text'=>"⋄ حذف م5"],['text'=>"⋄ حذف م6"]],
[['text'=>"⋄ تعين السورس"],['text'=>"⋄ حذف السورس"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم الاشتراك"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ حذف الاشتراك"],['text'=>"⋄ تعين الاشتراك"]],
[['text'=>"⋄ جلب الاشتراك"]],
[['text'=>"⋄ تفعيل الاشتراك"]],
[['text'=>"⋄ تعطيل الاشتراك"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم رد عام"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الردود العام  ",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف رد عام"],['text'=>"⋄ حذف رد عام"]],
[['text'=>"⋄ حذف ردود المطور"],['text'=>"⋄ ردود المطور"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ➖➖➖➖➖➖➖";
/*===== dev ~ @FF8FFI =====*/
$AUBEHABB_info = file_get_contents("data/AUBEHAB/AUBEHAB.txt");
$AUBEHAB = explode ("\n",$AUBEHABB_info);
$AUBEHABB_infos = file_get_contents("data/AUBEHAB/AUBEHABB.txt");
$AUBEHABB = explode("\n",$AUBEHABB_infos);
$list_AUBEHAB ="";
$list_AUBEHAB = $list_AUBEHAB.""."$AUBEHABB_infos";
/*===== dev ~ @FF8FFI =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ @FF8FFI =====*/
$carloss_info = file_get_contents("data/carlos/$chat_id.txt");
$carlos  = explode("\n",$carloss_info);
$carloss_infos = file_get_contents("data/carlos/$chat_id/crlo.txt");
$carloss = explode ("\n",$carloss_infos);
/*===== dev ~ @FF8FFI =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ @FF8FFI =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ @FF8FFI =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ @FF8FFI =====*/
$motay_info = file_get_contents("data/motay/$chat_id.txt");
$motay  = explode("\n",$motay_info);
$motaya_infos = file_get_contents("data/motay/$chat_id/mange.txt");
$motaya = explode ("\n",$motaya_infos);
/*===== dev ~ @FF8FFI =====*/
$bans = file_get_contents("data/ban/$chat_id.txt");
$banids  = explode("\n",$bans);
$banslist = file_get_contents("data/ban/$chat_id/list.txt");
$banlist = explode ("\n",$banslist);
/*===== dev ~ @FF8FFI =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/AUBEHAB");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/ban");
mkdir("data/ban/$chat_id");
mkdir("data/carlos");
mkdir("data/carlos/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/motay");
mkdir("data/motay/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("data/miss/$chat_id");
mkdir("data/miss/$chat_id/miss.json");
mkdir("statistics");

$DRPP = "$token";
$ckl = "@$devchink"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$DRPP/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$DRPP/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "ا" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
⌔︙عذرا عزيزي ⚠️.
⌔︙لا يمكنك استخدام البوت 🔰.
⌔︙الا بعد الاشتراك بالقناة 🚫.
⌔︙القناة : '.$ckl.' ✅
','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}}

$setch = file_get_contents("data/setch.json");
$setchannel = file_get_contents("data/setchannel.json");
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if(!in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$eri)){
if($setchannel == "مفعل ✔️"){
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞  مرحبا عزيزي\n⌯⁞ عليك الاشتراك في قناة البوت اولا [@$setch]\n⌯⁞  ليمكنك استخدامه",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎖اضغط هنا 🎖",'url'=>"t.me/$setch"]],]])]);
bot("sendmessage",[
"chat_id"=>$Devd,
"text"=>"",
]);
die('اا');
}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}

$new = $message->new_chat_member;
$newbot = $update->message->new_chat_member;
if ($new and $new->id == $bot_id) {
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⋄︙بوت ← $namebot
⋄︙لحماية المجموعات من التخريب
⋄︙يتم حذف (الفشار،الاباحي،...)
⋄︙البوت الاول علي التلجرام
⋄︙قم برفعي كمشرف وارسل ← تفعيل
⋄︙المطور ← [$DevUser]
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}

if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
⌯⁞ رتبتك ↫ $info
⌯⁞ ايديك ↫ $from_id
⌯⁞ معرفك ↫ $cass
