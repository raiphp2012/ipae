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
<div class="div-card">

        <div class="row">

<div class="col-lg-12 text-right">

   <?php  $backLink=$this->session->userdata("backLink"); ?>
    <a  href="javascript:history.back()"><button class="btn btn-primary ">Buy</button></div></a>
   </div>

</div>
</div>
<hr style="width: 100%; color: black; height: 1px; background-color:black;margin-top:0px !important" />

    <div class="container">
	 <div class="row">
	 <div class="col-xs-1 col-md-offset-3"><h1 style="font-size: 25px;margin-left: 17px;">iPhone8</h1>
	 </div>
	 
	 <div class="col-xs-5 col-md-offset-3"><h1 style="font-size: 25px;margin-left: 17px;" >iPhone8 Plus</h1>
	 </div>
	
	 </div>
	   <hr style="width: 90%">
	  <div class="row rowstyle">
	  
	 <div class="col-xs-1 col-md-offset-1 "> <p class="rowheader">Finish</h3>
	 </div>
	 <div class="col-md-4 col-md-offset-1"> <img class="img-responsive" style="margin-top: 35px;" src="<?php echo base_url();?>assests/iphone8/finish_iphone8_large.jpg" >
	 <div class="finish"><p style="margin-top: 30px;">Gold, Silver, Space Gray</p></div>
	 </div>
	
	 
	 <div class="col-md-5"> <img class="img-responsive"  src="<?php echo base_url();?>assests/iphone8/finish_iphone8plus_large.jpg" >
	 <div class="finish"><p style="margin-top: 30px;">Gold, Silver, Space Gray</p>
	 </div></div>
	 
	 </div>
	 

	   <hr style="width: 90%">
	 <div class="row">
	  
	 <div class="col-md-2 col-md-offset-1 rowheader"><p >Capacity<sup><small>1</small></sup></p>
	 </div>
	 <div class="col-xs-4"> 
	 <div>
	 <table>
	 <tbody class="rowcol">
	 
	<tr> <td>64GB</td></tr>
	<tr> <td>256GB</td></tr>
	</tbody>
	 </table>
	 </div>
	</div>
	 <div class="col-xs-4 "> 
	 <div>
	 <table>
	 <tbody class="rowcol">
	 <tr> <td>64GB</td></tr>
	<tr> <td>256GB</td></tr>
	</tbody>
	 </table>
	 </div>
	 </div>
	 
	 </div>
	 

	 <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Size and Weight<sup><small>2</sup></small></h3>
	 </div>
	 <div class="col-md-4"> <img class=" img-responsive"  src="<?php echo base_url();?>assests/iphone8/dimensions_iphone8_large.png">
	 <div class="finish" style="margin-top:45px;"><span><b >Weight:</b>148 grams (5.22 ounces) </span></div>
	 </div>
	 
	 <div class="col-md-4"> <img class=" " src="<?php echo base_url();?>assests/iphone8/dimensions_iphone8plus_large.png">
	  <div class="finish"><span><b>Weight:</b>202 grams (7.13 ounces)</span></div>
	  </div>
	 
	 </div>
	 <hr style="width: 90%">
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Display</p>
	 </div>
	 <div class="col-md-4"> <img class="sizeimg img-responsive" style="margin-top: 20px" src="<?php echo base_url();?>assests/iphone8/display_iphone_x_large.png">
	 <div class="finish">
	 <ul class="displaylist" style="margin-top: 20px">
	 <li>Retina HD display</li>
	 <li>4.7-inch (diagonal) widescreen LCD Multi-Touch display with IPS technology</li>
	 <li>1334-by-750-pixel resolution at 326 ppi</li>
	 <li>1400:1 contrast ratio (typical)</li>
	</ul>
	 </div>
	  </div>
	 
	 <div class="col-md-4"> <img class="sizeimg img-responsive" style="width: 316px;
height: 157px;" src="<?php echo base_url();?>assests/iphone8/display_iphone_8plus_large.png">
	  <div class="finish"> 
	  <ul class="displaylist" style="margin-top: 20px">
	  <li>Retina HD display</li>
	  <li>5.5-inch (diagonal) LED-backlit widescreen
Multi-Touch display with IPS technology</li>
	  <li>1920-by-1080-pixel resolution at 401 ppi</li>
	  <li>1300:1 contrast ratio (typical)</li>
	  </ul>
	  </div>
	 
	 </div>
	 
	 </div>
	 
	 <div class="row rowstyle">
	  
	 
	 <div class="col-md-5 col-md-offset-3"> 
	    <div class="finish">
	       <ul class="displaylist">
	    <span><p><b>Both models:</b><p></span>
	        <li>True Tone display</li>
	        <li>Wide color display (P3)</li>
	        <li>3D Touch</li>
	        <li>625 cd/m2 max brightness (typical)</li>
	        <li>Dual-domain pixels for wide viewing angles</li>
	        <li>Fingerprint-resistant oleophobic coating</li>
	        <li>Support for display of multiple languages and characters simultaneously</li>
	         <li>Display Zoom</li>
	          <li>Reachability</li>
	     </ul>
	    </div>
	  </div>
	 
	 </div>
	 
	 <hr style="width: 90%">
	
	<div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Splash, Water, and Dust Resistant<sup><small>3</small><sup></p> 
	 </div>
	 <div class="col-md-4 ">
	<p class="finish">Rated IP67 under IEC standard 60529</p>
	 </div>
	  </div>
	 <hr style="width: 90%">
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Chip</p>
	 </div>
	 <div class="col-md-1"> <img class="chipimg img-responsive" src="<?php echo base_url();?>assests/iphone8/chip_a11_m11_large.png">
	 
	  </div>
	 
	 <div class="col-md-5">
	 <ul class="listfont">
	 <li>A11 Bionic chip with 64-bit architecture</li>
	 <li>Neural Engine</li>
	 <li>Embedded M11 motion coprocessor</li>

	 </ul>
	 </div>
	 
	 </div>
	 <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Camera</p> </div>
	
	 <div class="col-xs-3"> <p class="rowcol">12MP camera</p>
	 </div>
	 
	  
	 
	 <div class="col-xs-5"><p class="rowcol">12MP wide-angle and telephoto cameras</p>
	 
	 </div>
	 
	 </div>
	 
	 <div class="row rowstyle">
	  
		
	 <div class="col-xs-3 col-md-offset-3"> <p class="rowcol">ƒ/1.8 aperture</p>
	 </div>
	 <div class="col-xs-5"><p class="rowcol">Wide-angle: ƒ/1.8 aperture <br>Telephoto: ƒ/2.8 aperture</p>
	 
	 </div>
	 
	 </div>
	 <div class="row rowstyle">
	  <div class="col-xs-3 col-md-offset-3"> <p class="rowcol">Digital zoom up to 5x</p>
	 </div>
	 
	  
	 
	 <div class="col-xs-5"><p class="rowcol">Optical zoom; digital zoom up to 10x </p>
	 </div>
	 <div class="col-xs-3 col-md-offset-3"> <p class="rowcol">-</p>
	 </div>
	  <div class="col-xs-3"> <p class="rowcol">Portrait mode </p>
	 </div>
	  <div class="col-xs-3 col-md-offset-3"> <p class="rowcol">-</p>
	 </div>
	  <div class="col-xs-3"> <p class="rowcol">Portrait Lighting (beta)</p>
	 </div>
	 
	 
	 </div>
	 <br>
	 <div class="row rowstyle"> 
	 <div class="col-md-4 col-md-offset-3"> 

<div class="finish">
	 <ul class="displaylist">
	 <li><b>Both Models:</b></li>
	 <li>Optical image stabilization</li>
	 <li>Six‑element lens</li>
	 <li>Quad-LED True Tone flash with Slow Sync</li>
	 <li>Panorama (up to 63 MP)</li>
	 <li>Sapphire crystal lens cover</li>
	 <li>Backside illumination sensor</li>
	 <li>Hybrid IR filter</li>
	 <li>Autofocus with Focus Pixels</li>
	 <li>Tap to focus with Focus Pixels</li>
	 <li>Live Photos with stabilization</li>
	 <li>Wide color capture for photos and Live Photos</li>
	 <li>Improved local tone mapping</li>
	 <li>Body and face detection</li>
	 <li>Exposure control</li>
	 <li>Noise reduction</li>
	 <li>Auto HDR for photos</li>
	 <li>Auto image stabilization</li>
	 <li>Burst mode</li>
	 <li>Timer mode</li>
	 <li>Photo geotagging</li>
	 <li>Image formats captured: HEIF and JPEG</li>
	</ul>
	 </div>


	 
	 
	 </div>
	 
	 </div>
	 <hr style="width: 90%">
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Video Recording</p> </div>
	 <div class="col-md-8 finish">
	  <ul class="displaylist">
	 <li>4K video recording at 24 fps, 30 fps, or 60 fps</li>
	 <li>1080p HD video recording at 30 fps or 60 fps</li>
	 <li>720p HD video recording at 30 fps</li>
	 <li>Optical image stabilization for video</li>
	 <li>Optical zoom; 6x digital zoom (iPhone 8 Plus only)</li>
	 <li>Quad-LED True Tone flash</li>
	 <li>Slo‑mo video support for 1080p at 120 fps or 240 fps</li>
	 <li>Time‑lapse video with stabilization</li>
	 <li>Cinematic video stabilization (1080p and 720p)</li>
	 <li>Continuous autofocus video</li>
	 <li>Body and face detection</li>
	 <li>Noise reduction</li>
	 <li>Take 8-megapixel still photos while recording 4K video</li>
	 <li>Playback zoom</li>
	 <li>Video geotagging</li>
	 <li>Video formats recorded: HEVC and H.264</li>
	 </ul>
	 
	 </div>
	 </div>
	 <hr style="width: 90%">
	<div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Front HD Camera</p> </div>
	 <div class="col-md-8 finish">
	 <ul class="displaylist">
	 <li>7MP camera</li>
	 <li>1080p HD video recording</li>
	 <li>Retina Flash</li>
	 <li>ƒ/2.2 aperture</li>
	 <li>Wide color capture for photos and Live Photos</li>
	 <li>Auto HDR</li>
	 <li>Backside illumination sensor</li>
	 <li>Body and face detection</li>
	 <li>Auto image stabilization</li>
	 <li>Burst mode</li>
	 <li>Exposure control</li>
	 <li>Timer mode</li>
	 </ul>
	 
	 </div>
	 </div>
	  <hr style="width: 90%">
	 
	 
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Touch ID</p> </div>
	 <div class="col-md-4"><p class="finish">Fingerprint sensor built into the new Home button</p> </div>
	 	 
	 </div>
	  <hr style="width: 90%">
	 
	 
	 
	 
	
	 
	
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Cellular and Wireless</p> </div>
	 <div class="col-md-2"><p class="row2header">Model A1863*Model A1864*

</p></div>
	 <div class="col-md-5"><p class="finish">FDD-LTE (Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28, 29, 30, 66)<br>
TD-LTE (Bands 34, 38, 39, 40, 41)<br>
TD-SCDMA 1900 (F), 2000 (A)<br>
CDMA EV-DO Rev. A (800, 1900, 2100 MHz)<br>
UMTS/HSPA+/DC-HSDPA (850, 900, 1700/2100, 1900, 2100 MHz)</p></div>
	 </div>
	 
	 <div class="row rowstyle">
	  
	 <!--<div class="col-md-2 col-md-offset-2"> <p class="rowheader">Cellular and Wireless</p> </div>-->
	 <div class="col-md-2 col-md-offset-3">
	 <p class="row2header">Model A1778* Model A1784* </p></div>
	 
	 <div class="col-md-5">
	 <p class="finish">FDD-LTE (Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28, 29, 30, 66)<br>
TD-LTE (Bands 34, 38, 39, 40, 41)<br>
UMTS/HSPA+/DC-HSDPA (850, 900, 1700/2100, 1900, 2100 MHz)</p>
	 </div>
	 </div>
	 
	  <div class="row rowstyle">
	  <div class="col-md-2 col-md-offset-3"><p class="row2header">All models</p></div>
	 <div class="col-md-6"><p class="finish">

    802.11ac Wi‑Fi with MIMO<br>
    Bluetooth 5.0 wireless technology<br>
    NFC with reader mode

</p>
	 </div>
	 </div>
	 <hr style="width: 90%">
	 
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Location</p> </div>
	 <div class="col-md-8">
	 <ul class="listfont finish">
	 <li>Assisted GPS, GLONASS, Galileo, and QZSS</li>
	 <li>Digital compass</li>
	 <li>Wi-Fi</li>
	 <li>Cellular</li>
	 <li>iBeacon microlocation</li>
	 </ul>
	 </div>
	 
	 </div>
	  <hr style="width: 90%">
	 
	 
	 
	 
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-1"> <p class="videoaudioheader">Audio Calling</p>
	 </div>
	 <div class="col-md-5">
	   <p class="finish">Voice over LTE (VoLTE)<span class="bigcaption"><sup>4</sup></span></p>
	
	 <p class="finish">Wi‑Fi calling<span class="bigcaption"><sup>4</sup></span></p>
	 
	 
	 </div>
	  
	 </div>
	 
	 
	 <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-1"> <p class="videoaudioheader">Audio Playback</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>Audio formats supported: AAC-LC, HE-AAC, HE-AAC v2, Protected AAC, MP3, Linear PCM, Apple Lossless, FLAC, Dolby Digital (AC-3), Dolby Digital Plus (E-AC-3), and Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX, and AAX+)
    

</li>
	 <li>User-configurable maximum volume limit</li>
	 </ul>
	 </div>
	  
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-1"> <p class="videoaudioheader">Video Playback</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>Video formats supported: HEVC, H.264, MPEG-4 Part 2, and Motion JPEG

  </li>
	 <li>Supports Dolby Vision and HDR10 content</li>
	  <li>AirPlay Mirroring, photos, and video out to Apple TV (2nd generation or later)<span class="bigcaption"><sup>5</sup></span></li>
	   <li>
    Video mirroring and video out support: Up to 1080p through Lightning Digital AV Adapter and Lightning to VGA Adapter (adapters sold separately)<span class="bigcaption"><sup>5</sup></span></li>
	   
	 </ul>
	 </div>
	  
	 </div>
	
	  <hr style="width: 90%">
	 <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-1"> <p class="videoaudioheader">External Buttons and Connectors</p>
	 </div>
	 <div class="col-md-6">
	 <img class="externalbtnimg img-responsive" src="<?php echo base_url();?>assests/iphone8/externalbuttons.png">
	 <!--<p class="diagram-text diagram-home">Home/Touch ID sensor<p> 
	 -->
	 
	 
	 </div>
	  
	 </div>
	 <hr style="width: 90%">
	 
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader"<p class="rowheader">Power and Battery<sup>6</sup></p> </div>
	 <div class="col-xs-4"><p class="finish">Lasts about the same as iPhone 7 </p>
	 <dl class="finish">
	 <dt>Talk time (wireless):</dt>
	 <dd>Up to 14 hours</dd>
	 
	 </dl>
	 <dl class="finish">
	 <dt>Internet use:</dt>
	 <dd>Up to 12 hours</dd>
	
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Video playback (wireless):</dt>
	 <dd>Up to 13 hours</dd>
	 </dl>
	 
	 <dl class="finish">
	 <dt>Audio playback (wireless):</dt>
	 <dd>Up to 40 hours</dd>
	 </dl>
	 <dl class="finish">
	 <dt>Fast-charge capable:</dt>
	 <dd>Up to 50% charge 30 minutes<sup>7</sup></dd>
	</dl>
	 </div>
	 
	 <div class="col-md-4 "><p class="finish">Lasts about the same as iPhone 7 Plus </p>
	 <dl class="finish">
	 <dt>Talk time (wireless):</dt>
	 <dd>Up to 21 hours</dd>
	 
	 </dl>
	 <dl class="finish">
	 <dt>Internet use:</dt>
	 <dd>Up to 13 hours</dd>
	
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Video playback (wireless):</dt>
	 <dd>Up to 14 hours</dd>
	 
	 
	 </dl>
	 
	 <dl class="finish">
	 <dt>Audio playback (wireless):</dt>
	 <dd>Up to 60 hours</dd>
	 </dl>
	 	 <dl class="finish">
	 <dt>Fast-charge capable:</dt>
	 <dd>Up to 50% charge 30 minutes<sup>7</sup></dd>
	</dl>
	 </div>
	 </div>
	 
	 <div class="row rowstyle">
	 <div class="col-md-5 col-md-offset-3">
     <dl class="finish">
	 <dt>Both models:</dt>
	 <dd>Built-in rechargeable lithium-ion battery</dd>
	 <dd>Wireless charging (works with Qi chargers)<sup>8</sup></dd>
	 <dd>Charging via USB to computer system or power adapter</dd>
	  <dd>Fast-charge capable</dd>
	</dl>
    </div>
	 
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	    <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Sensors</p> </div>
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
	 <hr style="width: 90%">
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1 "> <p class="rowheader">Operating System</p>
	 </div>
	 <div class="col-md-1"> <img class="chipimg" src="<?php echo base_url();?>assests/iphone8/ios11_icon_large.jpg">
	 
	  </div>
	 
	 <div class="col-md-5">
	 <ul class="listfont" style="margin-left: 20px;">
	 <li><h4><strong>iOS 11</strong></h4></li>
	 <li><p p class="finish">With new features and capabilities that let you get more done quickly and easily, iOS 11 makes iPhone more powerful, personal, and intelligent than ever.</p></li>

	 </ul>
	 </div>
	 
	 </div>
	  <hr style="width: 90%">
	  <div class="row rowstyle">
	 <div class="col-md-2 col-md-offset-1"> <p class="videoaudioheader">Accessibility</p>
	 </div>
	 <div class="col-md-6">
	  <ul class="listfont">
	    <li>Accessibility features help people with disabilities get the most out of their new iPhone 8. With built-in support for vision, hearing, physical and motor skills, and learning and literacy, you can fully enjoy the world’s most personal device.</li>
	 
	 </ul></div>
	  </div>
	 <div class="row rowstyle">
	   <div class="col-md-2 col-md-offset-3">
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
	<li>Closed Captions</li>
	
	</ul>


	</div>
	
	<div class="col-md-2 ">
     
	<br>
	<br>
	<ul class="listfontdotted">
	<li>AssistiveTouch</li>
	
	<li>Speak Screen</li>
	
	</ul>


	</div>
	 
	 </div>
	 <hr style="width: 90%">
	 
	 
	<div class="row">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Built-in Apps</p> 
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
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_tv_large.jpg">
	 <div class="imgcaption">TV</div >
	 </div>
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
	 
	</div>
	
	<div class="row rowstyle">
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_podcasts_large.jpg">
	 <div class="imgcaption">Podcasts</div >
	 </div>
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
	 
	</div>
	
	<div class="row rowstyle">
	 
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_find_my_friends_large.jpg">
	 <div class="imgcaption">Find My Friends</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_settings_large.jpg">
	 <div class="imgcaption">Setting</div >
	 </div>
	  <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Built-in Apps/icon_files_large.jpg">
	 <div class="imgcaption">Files</div >
	 </div>
	 
	 
	 
	</div>
	
	</div>
	
	
	 
	</div>
	 <hr style="width: 90%">
	
	<div class="row ">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Free Apps from Apple<sup>9</sup></p> 
	 <p class="caption">Pages, Numbers, Keynote, iMovie, GarageBand, iTunes U, and Clips are preinstalled.</p>
	 </div>
	 <div class="col-md-8">
	 
	 <div class="row rowstyle">
	 
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_imovie_large.jpg">
	 <div class="imgcaption">iMovie</div >
	 </div>
	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_pages_large.jpg">
	 <div class="imgcaption">Pages</div >
	 </div>
	 	 <div class="col-xs-2"><img  src="<?php echo base_url();?>assests/tech_speces/Free Apps from Apple/icon_keynote_large.jpg">
	 <div class="imgcaption">Keynote</div >
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
	 
	 
	 <hr style="width: 90%">
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader"<p class="rowheader">Headphones</p> </div>
	 <div class="col-md-3"><p class="finish">EarPods with Lightning Connector</p></div>
	 
	 
	 <div class="col-md-5 col-md-offset-"><img class=""  src="<?php echo base_url();?>assests/tech_speces/earpods_large.jpg">
	 
	 
	
	
	 </div>
	
	 </div>
      <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader"<p class="rowheader">SIM Card</p> </div>
	 <div class="col-md-6"><p class="finish">Nano-SIM</p>
	 <p class="finish">iPhone 8 and iPhone 8 Plus are not compatible with existing micro-SIM cards.</p></div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader"<p class="rowheader">Rating for<br> Hearing Aids</p> </div>
	 <div class="col-md-4"><p class="finish">iPhone 8 (Model A1863, A1905): M3, T4</p></div>
	 
	 
	 <div class="col-md-4"><p class="finish">iPhone 8 Plus (Model A1864, A1897): M3, T4</p></div>
	
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Mail Attachment Support</p> </div>
	 <div class="col-md-7"><p class="finish"><strong>Viewable document types</strong></p>
	 <p class="finish">..jpg, .tiff, .gif (images); .doc and .docx (Microsoft Word); .htm and .html (web pages); .key (Keynote); .numbers (Numbers); .pages (Pages); .pdf (Preview and Adobe Acrobat); .ppt and .pptx (Microsoft PowerPoint); .txt (text); .rtf (rich text format); .vcf (contact information); .xls and .xlsx (Microsoft Excel); .zip; .ics</p></div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">System Requirements</p> </div>
	 <div class="col-md-6"><p class="finish">Apple ID (required for some features)</p>
	 <p class="finish">Internet access<sup>10</sup></p>
	 <p class="finish">Syncing with iTunes on a Mac or PC requires:</p>
	 <ul class="listfontdotted">
	 <li><strong>Mac:</strong> Mac: OS X 10.9.5 or later</li>
	 <li><strong>PC:</strong> Windows 7 or later </li>
	 <li>iTunes 12.7 or later</li>
	 </ul>
	 
	 </div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	 <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Environmental Requirements</p> </div>
	 <div class="col-md-6"><p class="finish"><strong>Operating ambient temperature:</strong> 0° to 35° C (32° to 95° F)</p>
	 <p class="finish"><strong>Nonoperating temperature:</strong>  ‑20° to 45° C (‑4° to 113° F)</p>
	 <p class="finish"><strong>Relative humidity:</strong> 5% to 95% noncondensing</p>
	 <p class="finish"><strong>Operating altitude:</strong> tested up to 3,000 meters (10,000 feet)</p>
	 
	 
	 </div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">Languages</p> </div>
	 <div class="col-md-7"><p class="finish"><strong>Language support</strong></p>
	 <p class="finish">English (Australia, Canada, UK, U.S.), Chinese (Simplified, Traditional, Traditional Hong Kong), French (Canada, France), German, Italian, Japanese, Korean, Spanish (Latin America, Mexico, Spain), Arabic, Catalan, Croatian, Czech, Danish, Dutch, Finnish, Greek, Hebrew, Hindi, Hungarian, Indonesian, Malay, Norwegian, Polish, Portuguese (Brazil, Portugal), Romanian, Russian, Slovak, Swedish, Thai, Turkish, Ukrainian, Vietnamese</p>
	 
	 <p class="finish"><strong>QuickType keyboard support</strong> </p>
	 <p class="finish">English (Australia, Canada, India, Singapore, UK, U.S.), Chinese - Simplified (Handwriting, Pinyin, Stroke), Chinese - Traditional (Cangjie, Handwriting, Pinyin, Stroke, Sucheng, Zhuyin), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian, Japanese (Kana, Romaji), Korean, Spanish (Latin America, Mexico, Spain), Arabic, Bengali, Bulgarian, Catalan, Cherokee, Croatian, Czech, Danish, Dutch, Emoji, Estonian, Filipino, Finnish, Flemish, Greek, Gujarati, Hawaiian, Hebrew, Hindi (Devanagari, Transliteration), Hinglish, Hungarian, Icelandic, Indonesian, Latvian, Lithuanian, Macedonian, Malay, Marathi, Norwegian, Polish, Portuguese (Brazil, Portugal), Punjabi, Romanian, Russian, Serbian (Cyrillic, Latin), Slovak, Slovenian, Swedish, Tamil (Script, Transliteration), Telugu, Thai, Turkish, Ukrainian, Urdu, Vietnamese</p>

	 <p class="finish"><strong>QuickType keyboard support with predictive input<sup><small>9</small></sup></strong> </p>
	 <p class="finish">English (Australia, Canada, India, Singapore, UK, U.S.), Chinese (Simplified, Traditional), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian, Japanese, Korean, Russian, Spanish (Latin America, Mexico, Spain), Portuguese (Brazil, Portugal), Thai, Turkish </p>
	 
	 <p class="finish"><b>Siri languages</b></p>
	 <p class="finish">English (Australia, Canada, India, Ireland, New Zealand, Singapore, South Africa, UK, U.S.), Spanish (Chile, Mexico, Spain, U.S.), French (Belgium, Canada, France, Switzerland), German (Austria, Germany, Switzerland), Italian (Italy, Switzerland), Japanese, Korean, Mandarin (Mainland China, Taiwan), Cantonese (Mainland China, Hong Kong), Arabic (Saudi Arabia, United Arab Emirates), Danish (Denmark), Dutch (Belgium, Netherlands), Finnish (Finland), Hebrew (Israel), Malay (Malaysia), Norwegian (Norway), Russian (Russia), Swedish (Sweden), Turkish (Turkey), Thai (Thailand), Portuguese (Brazil)</p>
	 
	 
	  <p class="finish"><strong>Dictation languages</strong></p>
	 <p class="finish">English (Australia, Canada, India, Ireland, Malaysia, New Zealand, Philippines, Saudi Arabia, Singapore, South Africa, UAE, UK, U.S.), Spanish (Chile, Colombia, Mexico, Spain, U.S.), French (Belgium, Canada, France, Luxembourg, Switzerland), German (Austria, Germany, Luxembourg, Switzerland), Italian (Italy, Switzerland), Japanese, Korean, Mandarin (Mainland China, Taiwan), Cantonese (Hong Kong), Arabic (Kuwait, Saudi Arabia, Qatar, UAE), Catalan, Croatian, Czech, Danish, Dutch (Belgium, Netherlands), Finnish, Greek, Hebrew, Hungarian, Indonesian, Malaysian, Norwegian, Polish, Portuguese (Brazil, Portugal), Romanian, Russian, Slovakian, Swedish, Turkish, Thai, Ukrainian, Vietnamese</p>
	 
	 <p class="finish"><strong>Definition dictionary support</strong></p>
	 <p class="finish">English, Chinese (Simplified, Traditional), Danish, Dutch, French, German, Hindi, Italian, Japanese, Korean, Norwegian, Portuguese (Brazil), Russian, Spanish, Swedish, Thai, Turkish</p>
	 
	 <p class="finish"><strong>Bilingual dictionary support</strong></p>
	 <p class="finish">Chinese (Simplified), Dutch, French, German, Italian, Japanese, Korean, Spanish</p>
	 
	  <p class="finish"><strong>Spell check</strong></p>
	 <p class="finish">English (Australia, Canada, UK, U.S.), French, German, Italian, Spanish, Danish, Dutch, Finnish, Korean, Norwegian, Polish, Portuguese (Brazil, Portugal), Russian, Swedish, Turkish</p>
	 
	 
	 </div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	  <div class="row rowstyle">
	  
	 <div class="col-md-2 col-md-offset-1"> <p class="rowheader">In the Box</p> </div>
	 <div class="col-md-6">
	 <ul class="listfont">
	 <li>iPhone with iOS 11</li>
	 <li>EarPods with Lightning Connector</li>
	 <li>Lightning to 3.5 mm Headphone Jack Adapter</li>
	 <li>Lightning to USB Cable</li>
	 <li>USB Power Adapter</li>
	 <li>Documentation</li>
	 </ul>
	 
	 
	 </div>
	 
	 

	
	 </div>
	  <hr style="width: 90%">
	 
	 
	 
     <div class="row">
	 <div class="col-md-12">
	 
	 <img class="img-responsive" style="width:1500px;height:auto;" src="<?php echo base_url();?>assests/iphone8/box_large.jpg">
	 
	 </div>
 
 </div>
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