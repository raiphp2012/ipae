<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tech Specs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/TechSpecs.css">
     <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
 </head>
  <body>

    <?php 

if(!isset($this->session->userdata['logged_in']))
        {
          include("header.php");
        }
    else
        {
            include("user_header.php");
        }
        ?>

        <div class="container">
            
            
            
            
            
             <div class="row">

<div class="col-lg-12 text-right">

   <?php  $backLink=$this->session->userdata("backLink"); ?>
    <a  href="javascript:history.back()"><button  class="btn btn-primary">Buy</button></div></a>
   </div>


 


	 <div class="row">
	 <div class="col-md-3 col-md-offset-3"><h1 class="rowheader">iPhone 6s</h1>
	 </div>
	 
	 <div class="col-md-4 col-md-offset-1"><h1 class="rowheader">iPhone6s Plus</h1>
	 </div>
	
	 </div>
	   <hr>
	  <div class="row rowstyle">
	  
	 <div class="col-md-1 col-md-offset-1 "> <p class="rowheader">Finish</h3>
	 </div>
	 <div class="col-md-4 col-md-offset-1"> <img class="img-responsive" style="margin-top:35px;" src="<?php echo base_url();?>assests/tech_speces/iphone6 a.jpg" >
	 <div class="finish"><span>Rose Gold, Gold, Silver, Space Gray.</span></div>
	 </div>
	 
	 
	 
	 
	
	 
	 <div class="col-md-4"> <img class="img-responsive" src="<?php echo base_url();?>assests/tech_speces/iphone6plus a.jpg"  >
	 <div class="finish"><span>Rose Gold, Gold, Silver, Space Gray.</span></div>
	 </div>
	 </div>
	 
	 
	 </div>
	 
	 

	   <hr>
	   
	 <div class="row">
	  
	 <div class="col-md-2 col-md-offset-2 rowheader"><p >Capacity<sup><small>1</small></sup></p>
	 </div>
	 <div class="col-xs-4"> 
	 <div>
	 <table>
	 <tbody class="rowcol">
	 
	<tr> <th>32GB</th></tr>
	<tr> <th>128GB</th></tr>
	
	 
	 
	 </tbody>
	 </table>
	 </div>
	
	 </div>
	 <div class="col-xs-4 "> 
	 <div>
	 <table>
	 <tbody class="rowcol">
	 
	<tr> <th>32GB</th></tr>
	<tr> <th>128GB</th></tr>
	
	 
	 
	 </tbody>
	 </table>
	 </div>
	 </div>
	 
	 </div>
	 
	 <div class="row">
	 
	 
	 </div>
	   
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2 "> <p class="rowheader">Size and Weight<sup><small>2</sup></small></h3>
	 </div>
	 <div class="col-md-4"> <img class="sizeimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/iphone6 1.png">
	 <div class="finish"><span><b>Weight:</b> 5.04 ounces (143 grams)</span></div>
	  
	 
	
	 </div>
	 
	 <div class="col-md-4"> <img class="sizeimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/6plus 1.png">
	  <div class="finish"><span><b>Weight:</b>6.77 ounces (192 grams)</span></div>
	 
	 
	 </div>
	 
	 </div>
	 <hr>
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2 "> <p class="rowheader">Display</p>
	 </div>
	 <div class="col-md-4"> <img class="sizeimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/iphone6 2.png">
	 <div class="finish">
	 <ul class="displaylist">
	 <li>Retina HD display with 3D Touch</li>
	 <li>4.7-inch (diagonal) LED-backlit widescreen</li>
	 <li>Multi-Touch display with IPS technology</li>
	 <li>1334-by-750-pixel resolution at 326 ppi</li>
	 <li>1400:1 contrast ratio (typical)</li>
	</ul>
	 </div>
	  </div>
	 
	 <div class="col-md-4"> <img class="sizeimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/iphone6plus 2.png">
	  <div class="finish"> 
	  <ul class="displaylist">
	  <li>Retina HD display with 3D Touch</li>
	  <li>5.5-inch (diagonal) LED-backlit widescreen</li>
	  <li>Multi-Touch display with IPS technology</li>
	  <li>1920-by-1080-pixel resolution at 401 ppi</li>
	  <li>1300:1 contrast ratio (typical)</li>
	  </ul>
	  </div>
	 
	 </div>
	 
	 </div>
	 
	 <div class="row rowstyle">
	  
	 
	 <div class="col-md-5 col-md-offset-4"> 
	    <div class="finish">
	        
	    <ul class="displaylist">
	    <span><p><b>Both models:</b><p></span>
	        <li>500 cd/m2 max brightness (typical)</li>
	        <li>Full sRGB standard</li>
	        <li>Dual-domain pixels for wide viewing angles</li>
	        <li>Fingerprint-resistant oleophobic coating on front</li>
	        <li>Support for display of multiple languages and characters simultaneously</li>
	        <li>Display Zoom</li>
	        <li>Reachability</li>
	     </ul>
	    </div>
	  </div>
	 
	 </div>
	 
	<hr>
	
	
	
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2 "> <p class="rowheader">Chip</p>
	 </div>
	 <div class="col-md-1"> <img class="chipimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/chip_a9_m9.png">
	 
	  </div>
	 
	 <div class="col-md-4">
	 <ul class="listfont" style="margin-top:0px;">
	 <li>A9 chip with 64-bit architecture</li>
	 <li>Embedded M9 motion coprocessor</li>

	 </ul>
	 </div>
	 
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2 "> <p class="rowheader">Camera</p> </div>
	
	 <div class="col-md-4"> 
	 <ul class="listfont">
	        <li>12-megapixel camera</li>
	        <li>Live Photos with stabilization</li>
	        <li>Autofocus with Focus Pixels</li>
	        <li>Optical image stabilization (iPhone 6s Plus only)</li>
	        <li>True Tone flash</li>
	        <li>Panorama (up to 63 megapixels)</li>
	        <li>Auto HDR for photos</li>
	        <li>Exposure control</li>
	        <li>Burst mode</li>
	        <li>Timer mode</li>
	        <li>ƒ/2.2 aperture</li>
	        <li>Five-element lens</li>
	        <li>5x digital zoom</li>
	        <li>Hybrid IR filter</li>
	        <li>Backside illumination sensor</li>
	        <li>Sapphire crystal lens cover</li>
	        <li>Auto image stabilization</li>
	        <li>Local tone mapping</li>
	        <li>Noise reduction</li>
	        <li>Face detection</li>
	        <li>Photo geotagging</li>
	     </ul>
	 
	 </div>
	 
	  
	 
	 
	 </div>
	 
	
	 
	 
	 
	 
	 <hr>
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Video Recording</p> </div>
	 <div class="col-md-8">
	 <ul class="listfont">
	 <li>4K video recording at 30 fps</li>
	 <li>1080p HD video recording at 30 fps or 60 fps</li>
	 <li>720p HD video recording at 30 fps</li>
	 <li>Optical image stabilization for video (iPhone 6s Plus only</li>
	 <li>True Tone flash</li>
	 <li>Slo-mo video support for 1080p at 120 fps and 720p at 240 fps</li>
	 <li>Time-lapse video with stabilization</li>
	 <li>Cinematic video stabilization (1080p and 720p)</li>
	 <li>Continuous autofocus video</li>
	 <li>Noise reduction</li>
	 <li>Take 8-megapixel still photos while recording 4K video</li>
	 <li>Playback zoom</li>
	 <li>3x digital zoom</li>
	 <li>Face detection</li>
	 <li>Video geotagging</li>
	 </ul>
	 
	 </div>
	 </div>
	 <hr>

	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Front HD Camera</p> </div>
	 <div class="col-md-8">
	 <ul class="listfont">
	 <li>5-megapixel photos</li>
	 <li>720p HD video recording</li>
	 <li>Retina Flash</li>
	 <li>ƒ/2.2 aperture</li>
	 <li>Auto HDR for photos and videos</li>
	 <li>Backside illumination sensor</li>
	 <li>Exposure control</li>
	 <li>Burst mode</li>
	 <li>Timer mode</li>
	 <li>Face detection</li>
	 </ul>
	 
	 </div>
	 </div>
	 <hr>
	 

	 
	 
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Touch ID</p> </div>
	 <div class="col-md-4"><p class="finish">Fingerprint sensor built into the Home button</p> </div>
	 	 
	 </div>
	
	
	 
	
	  <hr>
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Cellular and Wireless</p> </div>
	 <div class="col-md-2"><p class="row2header">Model A1633*<br> Model A1634*</p></div>
	 <div class="col-md-6"><p class="finish">LTE (Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 27, 28, 29, 30)<BR> 
                                             TD-LTE (Bands 38, 39, 40, 41)<BR> TD-SCDMA 1900 (F), 2000 (A) <BR>UMTS/HSPA+/DC-HSDPA(850, 900, 1700/2100, 1900, 2100 MHz) <BR>CDMA EV-DO Rev. A (800,1700/2100, 1900, 2100 MHz) <BR>GSM/EDGE (850, 900, 1800, 1900 MHz)
											 </p></div>
	 </div>
	 
	 <div class="row rowstyle">
	  
	 
	 <div class="col-md-2 col-md-offset-4">	 <p class="row2header">Model A1688* <br>Model A1687* </p></div>
	 
	 <div class="col-md-6">
	 <p class="finish">LTE (Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 27, 28, 29) <BR>
TD-LTE (Bands 38, 39, 40, 41) <BR>
TD-SCDMA 1900 (F), 2000 (A) <BR>
CDMA EV-DO Rev. A (800, 1700/2100, 1900, 2100 MHz) <BR>
UMTS/HSPA+/DC-HSDPA (850, 900, 1700/2100, 1900, 2100 MHz) <BR>
GSM/EDGE (850, 900, 1800, 1900 MHz)</p>
	 </div>
	 </div>
	 
	<div class="row rowstyle">
	  <div class="col-md-2 col-md-offset-4"><p class="row2header">All models</p></div>
	 <div class="col-md-6 "><p class="finish">802.11a/b/g/n/ac Wi‑Fi with MIMO <BR> Bluetooth 4.2 wireless technology NFC</p>
	 
	 </div>
	 </div>
	 <hr>
	 
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Location</p> </div>
	 <div class="col-md-8">
	 <ul class="listfont">
	 <li>Assisted GPS and GLONASS</li>
	 <li>Digital compass</li>
	 <li>Wi-Fi</li>
	 <li>Cellular</li>
	 <li>iBeacon microlocation</li>
	 </ul>
	 </div>
	 
	 </div>
	 <hr>
	 
	
	 

	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-2"> <p class="videoaudioheader">Audio Playback</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>Audio formats supported: AAC (8 to 320 Kbps), Protected AAC (from iTunes Store), HE-AAC, MP3 (8 to 320 Kbps), MP3 VBR, Dolby Digital (AC-3), Dolby Digital Plus (E-AC-3), Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX, and AAX+), Apple Lossless, AIFF, and WAV</li>
	 <li>User-configurable maximum volume limit</li>
	 </ul>
	 </div>
	  
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-2"> <p class="videoaudioheader">TV and Video</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>AirPlay Mirroring, photos, audio, and video out to Apple TV (2nd generation or later)</li>
	 <li>Video mirroring and video out support: Up to 1080p through Lightning Digital AV Adapter and Lightning to VGA Adapter (adapters sold separately)</li>
	 <li>Video formats supported: H.264 video up to 4K, 30 frames per second, High Profile level 4.2 with AAC‑LC audio up to 160 Kbps, 48kHz, stereo audio or Dolby Audio up to 1008 Kbps, 48kHz, stereo or multichannel audio, in .m4v, .mp4, and .mov file formats; MPEG‑4 video up to 2.5 Mbps, 640 by 480 pixels, 30 frames per second, Simple Profile with AAC‑LC audio up to 160 Kbps per channel, 48kHz, stereo audio or Dolby Audio up to 1008 Kbps, 48kHz, stereo or multichannel audio, in .m4v, .mp4, and .mov file formats; Motion JPEG (M‑JPEG) up to 35 Mbps, 1280 by 720 pixels, 30 frames per second, audio in ulaw, PCM stereo audio in .avi file format</li>
	 </ul>
	 </div>
	  
	 </div>

	 <hr>
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-2"> <p class="videoaudioheader">External Buttons and Connectors</p>
	 </div>
	 <div class="col-md-6">
	 <img class="externalbtnimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/iphone6-connectors.png">
	 <!--<p class="diagram-text diagram-home">Home/Touch ID sensor<p> 
	 -->
	 
	 
	 </div>
	  
	 </div>
	 <hr>
	 
	  <div class="row rowstyle">
	  
	 <div class="col-xs-2 col-md-offset-2"> <p class="rowheader">Power and Battery<sup>3</sup></p> </div>
	 <div class="col-xs-4">
	 <dl class="finish">
	 <dt>Talk time:</dt>
	 <dd>Up to 14 hours on 3G</dd>
	 
	 </dl>
	 
	 
	 
	 <dl class="finish">
	 <dt>Internet use:</dt>
	 <dd>Up to 10 hours on 3G</dd>
	 <dd>Up to 10 hours on 4G LTE</dd>
	 <dd>Up to 11 hours on Wi-Fi</dd>
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>HD video playback:</dt>
	 <dd>Up to 11 hours</dd>
	 
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Audio playback:</dt>
	 <dd>Up to 50 hours</dd>
	 
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Standby:</dt>
	 <dd>Up to 10 days</dd>
	 
	 </dl>
	 
	 
	 </div>
	 
	 <div class="col-xs-4 ">
	 <dl class="finish">
	 <dt>Talk time (wireless):</dt>
	 <dd>Up to 24 hours on 3G</dd>
	 
	 </dl>
	 
	 
	 
	 <dl class="finish">
	 <dt>Internet use:</dt>
	 <dd>Up to 12 hours on 3G</dd>
	 <dd>Up to 12 hours on LTE</dd>
	 <dd>Up to 12 hours on Wi-Fi</dd>
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>HD video playback:</dt>
	 <dd>Up to 14 hours</dd>
	 
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Audio playback:</dt>
	 <dd>Up to 80 hours</dd>
	 
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Standby:</dt>
	 <dd>Up to 16 days</dd>
	 
	 </dl>
	 
	 
	 </div>
	 
	
	
	 </div>
	 
	 
	 </div>
	 
	 <div class="row rowstyle">
	 
	
	  
	 <div class="col-md-4 col-md-offset-4">
     <dl class="finish">
	 <dt>Both models:</dt>
	 <dd>Built-in rechargeable lithium-ion battery</dd>
	 <dd>Charging via USB to computer system or power adapter</dd>
	
	</dl>


	</div>
	 
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	    <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Sensors</p> </div>
	 <div class="col-md-6 col-md-offset-">
     <dl class="finish">
	
	  <dd>Touch ID fingerprint sensor</dd>
	 <dd>Barometer</dd>
	 <dd>Three-axis gyro</dd>
	 <dd>Accelerometer</dd>
	 <dd>Proximity sensor</dd>
	 <dd>Ambient light sensor</dd>
	
	</dl>


	</div>
	 
	 </div>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2 "> <p class="rowheader">Operating System</p>
	 </div>
	 <div class="col-md-1"> <img class="chipimg img-responsive" src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/ios10_icon_large.jpg">
	 
	  </div>
	 
	 <div class="col-md-5">
	 <ul class="listfont">
	 <li><h4><strong>iOS 10</strong></h4></li>
	 <li><p class="finish">With an all-new design and all-new features, iOS 10 is the world’s most advanced mobile OS. It brings your iPhone to life in more intelligent and expressive ways than ever.</p></li>

	 </ul>
	 </div>
	 
	 </div>
	
	 
	 <div class="row rowstyle">
	   
	 <div class="col-md-2 col-md-offset-4">
     <dl class="finish">
	
	  <dt>iOS 10 includes:</dt>
	 	
	</dl>
	
	<ul class="listfontdotted">
	<li>AirDrop</li>
	<li>AirPlay</li>
	<li>AirPrint</li>
	<li>Control Center</li>
	<li>Handoff</li>
	</ul>


	</div>
	
	<div class="col-md-2">
     
	<br>
	<br>
	<ul class="listfontdotted">
	<li>HomeKit</li>
	<li>iCloud</li>
	<li>iCloud Keychain</li>
	<li>Multitasking</li>
	<li>Night Shift</li>
	</ul>


	</div>
	
	<div class="col-md-2">
     
	<br>
	<br>
	<ul class="listfontdotted">
	<li>Notification Center</li>
	<li>Spotlight Search</li>
	
	</ul>


	</div>
	 
	 </div>
	 
	 <hr>
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-2"> <p class="videoaudioheader">Accessibility</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>Accessibility features help people with disabilities get the most out of their new iPhone 6s. With built-in support for vision, hearing, physical and motor skills, and learning and literacy, you can fully enjoy the world’s most personal device.</li>
	 
	 </ul>
	 </div>
	  
	 </div>
	 
	 <div class="row rowstyle">
	   
	 <div class="col-md-2 col-md-offset-4">
     <dl class="finish">
	
	  <dt>Features include:</dt>
	 	
	</dl>
	
	<ul class="listfontdotted">
	<li>VoiceOver</li>
	<li>Zoom</li>
	<li>Magnifier</li>
	
	</ul>


	</div>
	
	<div class="col-md-2 ">
     
	<br>
	<br>
	<ul class="listfontdotted">
	<li>Dictation</li>
	<li>Switch Control</li>
	
	</ul>


	</div>
	
	<div class="col-md-2 ">
     
	<br>
	<br>
	<ul class="listfontdotted">
	<li>Closed Captions</li>
	<li>AssistiveTouch</li>
	<li>Speak Screen</li>
	
	</ul>


	</div>
	 
	 </div>
	 <hr>
	 
	 <div class="row">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Built-in Apps</p> 
	 <p class=caption>Built-in apps are an essential part of your iPhone experience and are efficiently designed to use less than 200MB of storage.</p>
	 </div>
	 <div class="col-md-8">
	 
	 <div class="row rowstyle">
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_camera_large.jpg">
	 <div class="imgcaption">Camera</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_photos_large.jpg">
	 <div class="imgcaption">Photos</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_health_large.jpg">
	 <div class="imgcaption">Health</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_messages_large.jpg">
	 <div class="imgcaption">Messages</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_phone_large.jpg">
	 <div class="imgcaption">Phone</div >
	 </div>
	
	 
	 
	</div>
	
	<div class="row rowstyle">
	 
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_mail_large.jpg">
	 <div class="imgcaption">Mail</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_music_large.jpg">
	 <div class="imgcaption">Music</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_wallet_large.jpg">
	 <div class="imgcaption">Wallet</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_safari_large.jpg">
	 <div class="imgcaption">Safari</div >
	 </div>

	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_maps_large.jpg">
	 <div class="imgcaption">Maps</div >
	 </div>
	 
	 
	 
	 
	</div>
	
	<div class="row rowstyle">

	
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_calendar_large.jpg">
	 <div class="imgcaption">Calendar</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_itunes_store_large.jpg">
	 <div class="imgcaption">iTunes Store</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_app_store_large.jpg">
	 <div class="imgcaption">App Store</div >
	 </div>
	  <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_notes_large.jpg">
	 <div class="imgcaption">Notes</div >
	 </div>
	  <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_contacts_large.jpg">
	 <div class="imgcaption">Contacts</div >
	 </div>
	 
	 
	</div>
	
	<div class="row rowstyle">
	 
	
	 
	
	
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_ibooks_large.jpg">
	 <div class="imgcaption">iBook</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_homekit_large.jpg">
	 <div class="imgcaption">Home</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_weather_large.jpg">
	 <div class="imgcaption">Weather</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_reminders_large.jpg">
	 <div class="imgcaption">Reminders</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_clock_large.jpg">
	 <div class="imgcaption">Clock</div >
	 </div>
	 
	 
	</div>
	
	<div class="row rowstyle">
	 
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_stocks_large.jpg">
	 <div class="imgcaption">Stocks</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_calculator_large.jpg">
	 <div class="imgcaption">Calculator</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_voicememo_large.jpg">
	 <div class="imgcaption">Voice Memos</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_compass_large.jpg">
	 <div class="imgcaption">Compass</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_podcasts_large.jpg">
	 <div class="imgcaption">Podcasts</div >
	 </div>
	 
	</div>
	
	<div class="row rowstyle">
	 
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_applewatch_large.jpg">
	 <div class="imgcaption">Watch</div >
	 </div>
	 
	  <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_tips_large.jpg">
	 <div class="imgcaption">Tips</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_icloud_drive_large.jpg">
	 <div class="imgcaption">icloud</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_find_my_phone_large.jpg">
	 <div class="imgcaption">Find My iphone</div >
	 </div>

	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_find_my_friends_large.jpg">
	 <div class="imgcaption">Find My Friends</div >
	 </div>
	 
	</div>
	
	<div class="row rowstyle">
	 
	
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_settings_large.jpg">
	 <div class="imgcaption">Setting</div >
	 </div>
	 
	 
	 
	</div>
	
	</div>
	
	
	 
	</div>
	<HR>
	
	<div class="row ">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Free Apps<br>from Apple<sup>4</sup></p> 
	 <p class="caption">Pages, Numbers, Keynote, iMovie, GarageBand, and iTunes U are preinstalled on iPhone models with a capacity of 32GB or higher.</p>
	 </div>
	 <div class="col-md-8">
	 
	 <div class="row rowstyle">
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_imovie_large.jpg">
	 <div class="imgcaption">iMovie</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_pages_large.jpg">
	 <div class="imgcaption">Pages</div >
	 </div>
	 	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_numbers_large.jpg">
	 <div class="imgcaption">Numbers</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_itunesu_large.jpg">
	 <div class="imgcaption">iTunes U</div >
	 </div>
	
	<div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_garageband_large.jpg">
	 <div class="imgcaption">Garageband</div >
	 </div>
	 
	 
	</div>
	
	<div class="row rowstyle">
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_apple_store_large.jpg">
	 <div class="imgcaption">Apple Store</div >
	 </div>
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/icon_keynote.jpg">
	 <div class="imgcaption">Keynote</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_remote_large.jpg">
	 <div class="imgcaption">Apple TV Remote</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_itunes_remote_large.jpg">
	 <div class="imgcaption"> iTunes Remote</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/icon_music-memos.jpg">
	 <div class="imgcaption">Music memos</div >
	 </div>
	 
	 
	 
	</div>
	
	
	</div>
	
	
	 
	</div>
	 
	 
	<hr>
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Headphones</p> </div>
	 <div class="col-md-3"><p class="finish">EarPods with 3.5 mm Headphone Plug</p>
	 <p class="finish">Storage and travel case</p>
	 </div>
	 
	 
	 <div class="col-md-5 col-md-offset-"><img class="img-responsive"  src="<?php echo base_url();?>assests/tech_speces/earpods_large.jpg">
	 
	 
	
	
	 </div>
	
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">SIM Card</p> </div>
	 <div class="col-md-6"><p class="finish">Nano-SIM</p>
	 <p class="finish">iPhone 6s and iPhone 6s Plus are not compatible with existing micro-SIM cards.</p></div>
	 
	 

	
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Rating for<br> Hearing Aids</p> </div>
	 <div class="col-md-3"><p class="finish">iPhone 6s (Model A1633, A1688): M3, T4</p></div>
	 
	 
	 <div class="col-md-4"><p class="finish">iPhone 6s Plus (Model A1634, A1687): M3, T4</p></div>
	
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Mail Attachment Support</p> </div>
	 <div class="col-md-6"><p class="finish"><strong>Viewable document types</strong></p>
	 <p class="finish">.jpg, .tiff, .gif (images); .doc and .docx (Microsoft Word); .htm and .html (web pages); .key (Keynote); .numbers (Numbers); .pages (Pages); .pdf (Preview and Adobe Acrobat); .ppt and .pptx (Microsoft PowerPoint); .txt (text); .rtf (rich text format); .vcf (contact information); .xls and .xlsx (Microsoft Excel); .zip; .ics</p></div>
	 
	 

	
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">System Requirements</p> </div>
	 <div class="col-md-6"><p class="finish">Apple ID (required for some features)</p>
	 <p class="finish">Internet access<sup><small>5</sup></small></p>
	 <p class="finish">Syncing with iTunes on a Mac or PC requires:</p>
	 <ul class="listfontdotted">
	 <li><strong>Mac:</strong> OS X v10.8.5 or later</li>
	 <li><strong>PC:</strong> Windows 7 or later</li>
	 <li>iTunes 12.3 or later  </li>
	 </ul>
	 
	 </div>
	 
	 

	
	 </div>
	 <hr>
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Environmental Requirements</p> </div>
	 <div class="col-md-6"><p class="finish"><strong>Operating ambient temperature: </strong>0° to 35° C (32° to 95° F)</p>
	 <p class="finish"><strong>Nonoperating temperature:</strong> ‑20° to 45° C (‑4° to 113° F)</p>
	 <p class="finish"><strong>Relative humidity:</strong>  5% to 95% noncondensing</p>
	 <p class="finish"><strong>Operating altitude:</strong> tested up to 3,000 meters (10,000 feet)</p>
	 
	 
	 </div>
	 
	 

	
	 </div>
	 <hr>
	 
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">Languages</p> </div>
	 <div class="col-md-6"><p class="finish"><strong>Language support</strong></p>
	 <p class="finish">English (Australia, Canada, UK, U.S.), Chinese (Simplified, Traditional, Traditional Hong Kong), French (Canada, France), German, Italian, Japanese, Korean, Spanish (Latin America, Mexico, Spain), Arabic, Catalan, Croatian, Czech, Danish, Dutch, Finnish, Greek, Hebrew, Hindi, Hungarian, Indonesian, Malay, Norwegian, Polish, Portuguese (Brazil, Portugal), Romanian, Russian, Slovak, Swedish, Thai, Turkish, Ukrainian, Vietnamese</p>
	 
	 <p class="finish"><strong>QuickType keyboard support</strong> </p>
	 <p class="finish">English (Australia, Canada, India, Singapore, UK, U.S.), Chinese - Simplified (Handwriting, Pinyin, Stroke), Chinese - Traditional (Cangjie, Handwriting, Pinyin, Stroke, Sucheng, Zhuyin), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian, Japanese (Kana, Romaji), Korean, Spanish (Latin America, Mexico, Spain), Arabic, Bengali, Bulgarian, Catalan, Cherokee, Croatian, Czech, Danish, Dutch, Emoji, Estonian, Filipino, Finnish, Flemish, Greek, Gujarati, Hawaiian, Hebrew, Hindi (Devanagari, Transliteration), Hinglish, Hungarian, Icelandic, Indonesian, Latvian, Lithuanian, Macedonian, Malay, Marathi, Norwegian, Polish, Portuguese (Brazil, Portugal), Punjabi, Romanian, Russian, Serbian (Cyrillic, Latin), Slovak, Slovenian, Swedish, Tamil (Script, Transliteration), Telugu, Thai, Turkish, Ukrainian, Urdu, Vietnamese</p>
	  <p class="finish"><strong>QuickType keyboard support with predictive input<sup><small>6</small></sup></strong> </p>
	 <p class="finish">English (Australia, Canada, India, Singapore, UK, U.S.), Chinese (Simplified, Traditional), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian, Japanese, Korean, Russian, Spanish (Latin America, Mexico, Spain), Portuguese (Brazil, Portugal), Thai, Turkish</p>
	 
	 <p class="finish"><strong>Siri languages</strong></p>
	 <p class="finish">English (Australia, Canada, India, Ireland, New Zealand, Singapore, South Africa, UK, U.S.), Spanish (Chile, Mexico, Spain, U.S.), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian (Italy, Switzerland), Japanese, Korean, Mandarin (Mainland China, Taiwan), Cantonese (Mainland China, Hong Kong), Arabic (Saudi Arabia, United Arab Emirates), Danish (Denmark), Dutch (Belgium, Netherlands), Finnish (Finland), Hebrew (Israel), Malay (Malaysia), Norwegian (Norway), Russian (Russia), Swedish (Sweden), Turkish (Turkey), Thai (Thailand), Portuguese (Brazil)</p>
	 
	 
	  <p class="finish"><strong>Dictation languages</strong></p>
	 <p class="finish">English (Australia, Canada, India, Ireland, Malaysia, New Zealand, Philippines, Saudi Arabia, Singapore, South Africa, UAE, UK, U.S.), Spanish (Chile, Colombia, Mexico, Spain, U.S.), French (Belgium, Canada, France, Luxembourg, Switzerland), German (Austria, Germany, Switzerland), Italian (Italy, Switzerland), Japanese, Korean, Mandarin (Mainland China, Taiwan), Cantonese (Hong Kong), Arabic (Kuwait, Saudi Arabia, Qatar, UAE), Catalan, Croatian, Czech, Danish, Dutch (Belgium, Luxembourg, Netherlands), Finnish, Greek, Hebrew, Hungarian, Indonesian, Malaysian, Norwegian, Polish, Portuguese (Brazil, Portugal), Romanian, Russian, Slovakian, Swedish, Turkish, Thai, Ukrainian, Vietnamese</p>
	 
	 <p class="finish"><strong>Definition dictionary support</strong></p>
	 <p class="finish">English, Chinese (Simplified, Traditional), Danish, Dutch, French, German, Hindi, Italian, Japanese, Korean, Norwegian, Portuguese (Brazil), Russian, Spanish, Swedish, Thai, Turkish</p>
	 
	 <p class="finish"><strong>Bilingual dictionary support</strong></p>
	 <p class="finish">Chinese (Simplified), Dutch, French, German, Italian, Japanese, Korean, Spanish</p>
	 
	  <p class="finish"><strong>Spell check</strong></p>
	 <p class="finish">English (Australia, Canada, UK, U.S.), French, German, Italian, Spanish, Danish, Dutch, Finnish, Korean, Norwegian, Polish, Portuguese (Brazil, Portugal), Russian, Swedish, Turkish</p>
	 
	 
	 </div>
	 
	 

	
	 </div>
	 <hr>
	 
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-2"> <p class="rowheader">In the Box</p> </div>
	 <div class="col-md-6">
	 <ul class="listfont">
	 <li>iPhone with iOS 10</li>
	 <li>EarPods with 3.5 mm Headphone Plug</li>
	 <li>Lightning to USB Cable</li>
	 <li>USB Power Adapter</li>
	 <li>Documentation</li>
	 </ul>
	 
	 
	 </div>
	 
	 

	
	 </div>
	 <hr>
	 
	 
	 
     <div class="row">
	 <div class="col-md-8 col-md-offset-2">
	 
	 <img class="img-responsive" style="width:1000px;height:500px;" src="<?php echo base_url();?>assests/tech_speces/iphone6s-box_large.jpg">
	 
	 </div>
 
 
 </div>
 
 
 
 
 
 
 
 
  

   
 <?php include("footer.php");?>
    
    <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

    <script src="<?php echo base_url();?>assests/js/validation.js"></script>
 </body>
</html>