
<?php
	function getTemplate(){
		$ruta = 'mail/contacto_template.php';
		if (is_file($ruta)) {
			ob_start();
			include $ruta;
			return ob_get_clean();
						
		}
	}		

	if(!empty($_POST)){
		include('mail/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsMail();
		$mail->Host = '200.41.57.131';
		$mail->SetFrom('contacto@platinum.com.ve', 'Contacto desde la página Web de Platinum');				
		$mail->AddAddress('contacto@platinum.com.ve');
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$body = getTemplate();
		
	
		$mail->Subject = 'Formulario de Contacto Platinum';
				
		$body = sprintf($body,$_POST['nombre'],$_POST['email'],$_POST['mensaje']);
		$mail->Body = $body;

		if(!$mail->Send()) {
			var_dump($mail->ErrorInfo);
		}	
	}
	
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="Platinum 98.7 FM #RadioReal &#45; platinum.com.ve"/>
        <title>Platinum</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/jbp-inmo.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/jbp-inmo-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/icono_144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/icono_114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icono_72.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/icono_56.png">
       
       
       <link href="css/universal_video_background.css" rel="stylesheet" type="text/css">
       <script type="text/javascript">

/******************************************
* Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
* Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
* Last updated Nov 9th, 05' by DD. This notice must stay intact for use
******************************************/
  function openwindow(){
window.open("autumn_effect.htm","","width=350,height=500")
}

  //Configure below to change URL path to the snow image
  var snowsrc="snow3.gif"
  // Configure below to change number of snow to render
  var no = 22;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

	function iecompattest(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	}

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
		if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
		doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
	if (snowdistance=="windowheight"){
		doc_height = window.innerHeight || iecompattest().clientHeight
	}
	else{
		doc_height = iecompattest().scrollHeight
	}
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

	function hidesnow(){
		if (window.snowtimer) clearTimeout(snowtimer)
		for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
	}
		

if (ie4up||ns6up){
    snowIE_NS6();
		if (hidesnowtime>0)
		setTimeout("hidesnow()", hidesnowtime*1000)
		}

</script>
		
<script src="js2/jquery.min.js" type="text/javascript"></script>
<script src="js2/jquery-ui.min.js"></script>

<script src="js2/universal_video_background.js" type="text/javascript"></script>


<script>
		jQuery(function() {

			jQuery('#universal_video_background_default').universal_video_background({
				width: 750,
				height: 450,
				autoPlayFirstVideo:false,
				responsive:true,
				
				borderWidth: 0,
				borderColor: '#FFFFFF',	
				showBottomNav:true,
				
				
				thumbsBorderColorON:'#FFFFFF',
				thumbsBorderColorOFF:'#cccccc',
				thumbsWrapperBg:'#000000', //hexa or image
				thumbsBgOffImgOpacity:70,
				thumbsWrapperMarginTop:-70
				
			});		
			
			
		});
		

	</script>
       
       <script type="text/javascript">


function cargar()
 {  
 
 var d = new Date();
var date = d.getDate();
var day = d.getDay();

var weekOfMonth = Math.ceil((date - 1 - day) / 7);

var now = new Date();
//var date = (now.getMonth() + 1) * 100 + now.getDate();
var time = now.getHours() * 100 + now.getMinutes();

var settings = [
  { day: 6, time: 001, image: '0.jpg'},
  { day: 6, time: 759, image: '0.jpg'},
  { day: 6, time: 800, image: '8.jpg'},
  { day: 6, time: 959, image: '8.jpg'},
  { day: 6, time: 1000, image: '9.jpg'},
  { day: 6, time: 1159, image: '9.jpg'},
  { day: 6, time: 1200, image: '10.jpg'},
  { day: 6, time: 1359, image: '10.jpg'},
  { day: 6, time: 1400, image: '11.jpg'},
  { day: 6, time: 1559, image: '11.jpg'},
  { day: 6, time: 1600, image: '12.jpg'},
  { day: 6, time: 1659, image: '12.jpg'},
  { day: 6, time: 1700, image: '13.jpg'},
  { day: 6, time: 1859, image: '13.jpg'},
  { day: 6, time: 1900, image: '14.jpg'},
  { day: 6, time: 2000, image: '14.jpg'},
  { day: 6, time: 2001, image: '0.jpg'},
  { day: 6, time: 2400, image: '0.jpg'},
  { day: 0, time: 001, image: '0.jpg'},
  { day: 0, time: 759, image: '0.jpg'},
  { day: 0, time: 800, image: '15.jpg'},
  { day: 0, time: 959, image: '15.jpg'},
  { day: 0, time: 1000, image: '0.jpg'},
  { day: 0, time: 1859, image: '0.jpg'},
  { day: 0, time: 1900, image: '16.jpg'},
  { day: 0, time: 1959, image: '16.jpg'},
  { day: 0, time: 2000, image: '0.jpg'},
  { day: 0, time: 2400, image: '0.jpg'},
  // any other day:
  { day: 1, time: 001, image: '0.jpg'},
  { day: 1, time: 359, image: '0.jpg'},
  { day: 1, time: 400, image: '1.jpg'},
  { day: 1, time: 530, image: '1.jpg'},
  { day: 1, time: 531, image: '2.jpg'},
  { day: 1, time: 900, image: '2.jpg'},
  { day: 1, time: 901, image: '0.jpg'},
  { day: 1, time: 1159, image: '0.jpg'},
  { day: 1, time: 1201, image: '3.jpg'},
  { day: 1, time: 1300, image: '3.jpg'},
  { day: 1, time: 1301, image: '4.jpg'},
  { day: 1, time: 1600, image: '4.jpg'},
  { day: 1, time: 1601, image: '5.jpg'},
  { day: 1, time: 1900, image: '5.jpg'},
  { day: 1, time: 1901, image: '6.jpg'},
  { day: 1, time: 2100, image: '6.jpg'},
  { day: 1, time: 2101, image: '0.jpg'},
  { day: 1, time: 2200, image: '0.jpg'},
  { day: 1, time: 2201, image: '0.jpg'},
  { day: 1, time: 2400, image: '0.jpg'}
];

var setting;
for (var i = 0; i < settings.length; i++) {
  var s = settings[i];
  if ((s.day == 1 || s.day == day) && time < s.time) {
    setting = settings[i];
    break;
  }
}
 var urlimagen = "platinum/programas/" ;
 var reimg  ;
 var imagen = setting.image;
 var index="?" + Math.random();
 reimg=document.getElementById('re');
 
 reimg.src=urlimagen+imagen+index;
}  


onload=function()
    {
        // Cargamos una imagen aleatoria
        cargar();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(cargar,5000);
    }


</script>


       
    </head>
    
    <body>
		<div class="red_separator" style="z-index:100000000; position:absolute;" ></div>
        <div class="navbar"  >
            <div class="navbar-inner"  >
                <div class="container" >
                    <a href="#" class="brand">
                       <img src="platinum/template/logogrande.png" id="logo" class="img-responsive">                    <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                 <div class="slogan"  >   <img src="platinum/slogan.png" class="img-responsive"></div>
                    <!-- Main navigation -->
					<div class="nav-collapse collapse pull-right" >
                    
<ul class="nav">
						
		  <li class="menu_divide"><a href="#home">Inicio</a></li>
			
				
			
						
							<li class="menu_divide"><a href="#videos">Videos</a></li>
		
							<li class="menu_divide"><a href="#noticias">Noticias</a></li>
							<li class="menu_divide"><a href="#programas">Programas</a></li>
                           <li class="menu_divide"><a href="#nosotros">Nosotros</a></li>
							<li class="menu_divide"><a href="#contacto">Contacto</a></li>
					
					
							<li class="menu_divide">&nbsp;</li>
						</ul>
					</div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider" style="background-color:#333; "><!-- mask elemet use for masking background image -->
              <div class="mask" ></div>
                <!-- All slides centred in container element -->
                    
                <div class="container">
                    <!-- Start first slide -->
                <div class="contenidoslider">
                
                <script type="text/javascript">
<!-- 
function random_imglink(){ 
var images=new Array()

images[1]="banners/1.gif" 
images[2]="banners/2.jpg" 
images[3]="banners/3.jpg" 
images[4]="banners/4.jpg" 
images[5]="banners/5.jpg" 
images[6]="banners/6.jpg" 
images[7]="banners/7.jpg" 
images[8]="banners/8.gif" 

var imagelinks=new Array() 

imagelinks[1]="http://www.batterydrink.com/" 
imagelinks[2]="http://www.rescarven.com/" 
imagelinks[3]="#"
imagelinks[4]="#"
imagelinks[5]="#"
imagelinks[6]="#"
imagelinks[7]="http://www.estarseguros.com/"
imagelinks[8]="http://www.viajanet.com.ve/"
var ry=Math.floor(Math.random()*images.length)

if (ry==0) 
ry=1 
document.write('<a target="_blank" href='+'"'+imagelinks[ry]+'"'+'><img src="'+images[ry]+'" border=0></a>') 
}

random_imglink() 

//--> 
</script> 
                <br>
<br>
                   <div class="span8 animated bounceIn" id="stream">
                      
                       <script type="application/javascript" src="//content.jwplatform.com/players/uBL3oCQe-Af9LdpyB.js"></script>

                        <embed pluginspage="http://www.adobe.com/go/getflashplayer"src="http://aac-streaming.com/Reproductor/Platinum/platinum.swf" width="540" height="110" wmode="transparent"type="application/x-shockwave-flash" allowscriptaccess="always"></embed>
                                             
	<!--							<audio controls style="width:100%; border-radius:8px;">
  <source src="psy.ogg" type="audio/ogg">
  <source src="psy.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>-->
 
                  </div>
                     <div class="span4 animated bounceIn" id="programas-menu">
                      	 <div class="margin-programas">
                     
                          <div class="programa-titu" > Programa en vivo:
 </div> <img src="" id="re"> 
                        
                        
                        <div class="demo"> </div>
                           <div class="programa-titu" >Programacion:</div>
                           <div class="programa-listado">
                           
                           <ul class="mini-programas">
                           <li>
                           <b class="left">Lun-Vier  <strong>Arpegios de Venezuela</strong></b> 
                           <b class="right">4:00A.M. a 5:30A.M.</b>
                           </li>
                            <li>
                            <b class="left">Lun-Vier  <strong>Contra Reloj</strong></b> 
                            <b class="right">5:30A.M. a 9:00A.M.</b>
                           </li>
                       
                            <li>
                            <b class="left">Lun-Vier  <strong>ADN Informativo</strong></b> 
                            <b class="right">12:00P.M. a 1:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Lun-Vier  <strong>Tecnobios</strong></b> 
                            <b class="right">1:00P.M. a 4:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Lun-Vier  <strong>Sin Formato</strong></b> 
                            <b class="right">4:00P.M. a 7:00P.M.</b>
                           </li>
                            
                            <li>
                            <b class="left">Lun-Vier  <strong>En Plenitud</strong></b> 
                            <b class="right">7:00P.M. a 9:00P.M </b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Generación de Relevo</strong></b> 
                            <b class="right">8:00A.M. a 10:00A.M.</b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Tono Salud</strong></b> 
                            <b class="right">10:00A.M. a 12:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Al Aire Libre</strong></b> 
                            <b class="right">12:00P.M. a 2:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Años Intactos</strong></b> 
                            <b class="right">2:00P.M. a 4:00P.M. </b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Mundo Exclusivo</strong></b> 
                            <b class="right">4:00P.M. a 5:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Special Music</strong></b> 
                            <b class="right">5:00P.M. a 7:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Sábados  <strong>Versiones</strong></b> 
                            <b class="right">7:00P.M. a 8:00P.M.</b>
                           </li>
                            <li>
                            <b class="left">Domingos  <strong>Planeta Reggae</strong></b> 
                            <b class="right">8:00A.M. a 10:00A.M.</b>
                           </li>
                            <li>
                            <b class="left">Domingos  <strong>Domingo de Resurección</strong></b> 
                            <b class="right">6:00P.M. a 7:00P.M. </b>
                           </li>
                           </ul>
                           
                           
                           
</div>
                        </div>
                    </div>
                  
                  <br>
<br>
<br>
<br>
<br>

                </div>
                    <div class="da-slide" >
               
                        
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2 class="fittext2"></h2>
                       
                        <p style="color:#000"></p>
                        
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        
                      
                    
                  
                  </div>
              </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="empresa">

            <div class="container" style="background: #141312;">
                <!-- Start title section -->
                <div class="title"><br>
                    <h1><span>Redes Sociales</span></h1>
                    <!-- Section's title goes here -->
					
                    <!--Simple description for section goes here. -->
                </div>
	
				<div class="row-fluid">
                    <div class="span4">
                        <div class="centered redes">
                         Facebook
                           
                        </div> 
                        
                         <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/pages/Mundo-Real/266238706753466" data-height="350" data-width="368" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore" ><blockquote cite="https://www.facebook.com/pages/Mundo-Real/266238706753466"><a href="https://www.facebook.com/pages/Mundo-Real/266238706753466">Mundo Real</a></blockquote></div></div>
  
  
                       
                    </div>         
                    <div class="span4">
                        <div class="centered redes">
                         Instagram
                            
                        </div>
                     <iframe src="//instansive.com/widgets/0d441eefca7c2e6ce3eabdb6cf9b5c68cb342d9d.html" id="instansive_0d441eefca" name="instansive_0d441eefca"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden; height:450px; "></iframe>
                    </div>
                    <div class="span4">
                        <div class="centered redes">
                          Twitter
                           
                        </div>
                        
                       <a class="twitter-timeline" href="https://twitter.com/987real" data-widget-id="622176919539331072">Tweets por el @987real.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



                    </div>
                </div>
            </div>
        </div>
        <!-- Service section end -->
		<!-- Contrato section start -->
    
     
            
            
            
              <div id="videos">  </div> 
              
              

       

		<div class="container-fluid contratar-fluid">
        		
			<div class="row">
				<div class="col-md-12">
					<div class="section contratar-section">
						<div class="container">
                         <script type="text/javascript">
<!-- 
function random_imglink2(){ 

var ry=Math.floor(Math.random()*images.length)

if (ry==0) 
ry=1 
document.write('<a href='+'"'+imagelinks[ry]+'"'+'><img src="'+images[ry]+'" border=0></a>') 
}

random_imglink() 

//--> 
</script> <br>
                         <div class="title"><br>
                    <h1><span>Galerias de Videos</span></h1>
                    <!-- Section's title goes here -->
					
                    <!--Simple description for section goes here. -->
                </div>
                        <div class="row-fluid">
                        
                        
                        
                        
                   <div class="puesto animated fadeInDown" >
                        <div class="highlighted-box-video" style="padding-top:10px; border-radius:10px; background-color:#000;">
                       <!-- Video -->
          <div id="containingDiv " style="position:relative;">          
                    <div id="universal_video_background_default" style="display:none; position:relative;">
   
      <ul class="universal_video_background_list">               
        <li data-bottom-thumb="platinum/video/1.jpg" data-youtube="2l1cK22EJBs"></li>
        <li data-bottom-thumb="platinum/video/2.jpg" data-youtube="DfG6VKnjrVw"></li>
        <li data-bottom-thumb="platinum/video/3.jpg" data-youtube="OaXaxpJcHYM"></li>
        <li data-bottom-thumb="platinum/video/4.jpg" data-youtube="QbCQrX_2HXc"></li>
        <li data-bottom-thumb="platinum/video/5.jpg" data-youtube="25wDWn58-yo"></li>
        <li data-bottom-thumb="platinum/video/6.jpg" data-youtube="Xq-knHXSKYY"></li>
        <li data-bottom-thumb="platinum/video/7.jpg" data-youtube="KEI4qSrkPAs"></li>
        <li data-bottom-thumb="platinum/video/8.jpg" data-youtube="jGflUbPQfW8"></li>
        <li data-bottom-thumb="platinum/video/9.jpg" data-youtube="z-wT3HXS_sA"></li>
        <li data-bottom-thumb="platinum/video/10.jpg" data-youtube="9ViW-F1BUvY"></li>
        
                    
                    <br>
<br>

    </ul>       
  </div>
              
  <div id="bottomText"></div>  
</div>          <!-- Fin Video -->               
                        </div>
                    </div>
                    <div class="span4 animated fadeInDown">
                        <div class="highlighted-box center t3">
                            <h1>Play List</h1>
                            <p class="text-center ">  Disfruta de nuestra selección del top 10 de la semana<br>
 
                            <ul class="mini-programas">
                           <li data-bottom-thumb="platinum/video/1.jpg" data-youtube="YqeW9_5kURI">
                           <b class="left">#1  <strong>Justin Bieber – Sorry </strong></b> 
                           <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;	</b>
                           </li>
                            <li>
                            <b class="left">#2   <strong>Adele – Hello</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#3   <strong>Ariana Grande – Focus</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#4   <strong>Lost Frequencies – Are you with me</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#5  <strong>San Luis con Chino y Nacho – Se Acabo</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#6   <strong>Avicii – For a better day</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#7   <strong>The Weeknd - Can't Feel My Face </strong></b> 
                            <b class="right">&#9733&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#8   <strong>OMI - Cheerleader</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#9   <strong>Michael Buble ft Thalia - Feliz Navidad </strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                            <li>
                            <b class="left">#10   <strong>Frank Sinatra - Santa Claus is coming to town</strong></b> 
                            <b class="right">&#9733;&#9733;&#9733;&#9733;&#9733;</b>
                           </li>
                           
                           </ul>
                        </div>
                      
                      <div id="noticias">  </div>  
                    </div>
                </div>
                        
                        
                     
                        </div>
					</div>
				</div>	
			</div>	
		</div>	
		<!-- Contrato section end -->	
        <!-- Portfolio section start -->
        <div class="section amarillo" id="single-project" >
			<div class="container" style="padding:0;">
				
				<div style="padding-bottom: 25px;"></div>
                   <div>	   <script type="text/javascript">
<!-- 
function random_imglink3(){ 

var ry=Math.floor(Math.random()*images.length)

if (ry==0) 
ry=1 
document.write('<a href='+'"'+imagelinks[ry]+'"'+'><img src="'+images[ry]+'" border=0></a>') 
}

random_imglink() 

//--> 
</script> <br></div>	
<br>
                <div class=" contratar-section2 title centered">
                    <h1><span>Noticias</span></h1>
                </div>
                <!-- Start details for portfolio project 1 -->
                <div >
                    <div id="not1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                             <iframe width="560" height="315" src="https://www.youtube.com/embed/KK9bwTlAvgo" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>  Lo Mejor de YouTube 2015 en su acostumbrado YouTube Rewind: No Watch Me 2015</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info programa-listado">
									<div>
                                    
                                    
                                
Como todos los años YouTube nos trae su #YouTubeRewind con un mix con los Youtuber mas populare de todo el mundo  y Videos mas virales.
En este año nos traen por America Latina  a los Youtuber Hola Soy German, Yuya, Caelike, Los Polinecios y Werevertumorro <br>
<br>

                                  

La banda presentará en directo un álbum titulado precisamente A head full of dreams, cuyo lanzamiento se ha programado para el próximo 4 de diciembre. También la anterior colección, Ghost stories (2014), para la que Coldplay decidió no realizar gira, para meterse de nuevo en el estudio a grabar nuevo material.<br>
<br>


En palabras de Chris Martin, el líder de Coldplay: "Creo que no hacer la gira de Ghost stories fue una de las mejores decisiones que hemos tomado, ya que nos dió la oportunidad de centrar nuestra energía en el estudio y reactivar el deseo de todos de recorrer el mundo con nuestra música. A head full of dreams es un álbum concebido para tocarse en vivo. Y estamos deseando hacerlo".<br>
<br>


Las fechas confirmadas del tour son las siguientes:<br>
<br>


marzo 2016<br>

Jueves 31 de marzo - Estadio Único de La Plata, Buenos Aires, ARGENTINA<br>
<br>


abril 2016<br>

Domingo 3 de abril - Estadio Nacional, Santiago, CHILE<br>

Martes 5 de abril - Estadio Nacional, Lima, PERÚ<br>

Jueves 7 de abril - Allianz Parque, Sao Paulo, BRASIL<br>

Domingo 10 de abril - Maracaná, Río de Janeiro, BRASIL<br>

Miércoles 13 de abril - Estadio El Campin, Bogotá, COLOMBIA<br>

Sábado 16 de abril - Foro Sol, México, MÉXICO<br>
<br>
<br>


mayo 2016<br>

Martes 24 de mayo - Stade Charles-Ehrmann, Niza, FRANCIA<br>

Jueves 26 de mayo - Estadi Olimpic, Barcelona, ESPAÑA<br>
<br>
<br>


junio 2016<br>

Miércoles 1 de junio - Veltins-Arena, Gelsenkirchen, ALEMANIA<br>

Sábado 4 de junio - Etihad Stadium, Manchester, REINO UNIDO<br>

Martes 7 de junio - Hampden Park, Glasgow, REINO UNIDO<br>

Sábado 11 de junio - Stadion Letzigrund, Zúrich, SUIZA<br>

Jueves 16 de junio - Wembley Stadium, Londres, REINO UNIDO<br>

Sábado 18 de junio - Wembley Stadium, Londres, REINO UNIDO<br>

Jueves 23 de junio - ArenA, Ámsterdam, HOLANDA<br>

Miércoles 29 de junio - Olympiastadion, Berlín, ALEMANIA<br>

<br>

julio 2016<br>
Viernes 1 de julio - Volksparkstadion, Hamburgo, ALEMANIA <br>

Domingo 3 de julio - Friends Arena, Estocolmo, SUECIA<br>

Martes 5 de julio - Telia Parken, Copenhague, DINAMARCA<br>
<br>
<br>



Las entradas para la gira europea salen a la venta el viernes 27 de noviembre. La información sobre la venta de entradas para Latinoamérica se confirmará pronto. Más adelante se confirmarán las fechas para Norte América.<br>
<br>


Las entradas para el concierto de Barcelona saldrán a la venta general el próximo viernes 27 de noviembre a las 10am en livenation.es, ticketmaster.es (+ Halcón Viajes + Viajes Carrefour + fnac.es y a partir del día 28 de noviembre también en Tiendas Fnac) y elcorteingles.es (+ tiendas El Corte Inglés). Precios: De 60€ a 95€ (+ gastos de distribución). Política de acceso: Menores de 16 años acompañados de padre, madre o tutor legal.<br>
<br>


La preventa para usuarios registrados, o que se registren gratuitamente en los próximos días en livenation.es, estará disponible desde el miércoles 25 de noviembre a las 10am hasta el día 26 de noviembre a las 5pm.<br>
<br>

                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="not2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
 <img src="img/noticia/big2.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                       
                            <div class="project-description ">
                                <div class="project-title clearfix">
                                    <h3>Alejandro Sanz y Pablo Alborán optan al Grammy a mejor álbum de pop latino</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info programa-listado">
                                    <div>
                                    
                        Alejandro Sanz, con “Sirope”, y Pablo Alborán, con “Terral”, son candidatos al mejor álbum de pop latino en la 58 edición de los Premios Grammy, anunció hoy la Academia de Grabación de Estados Unidos.<br>
<br>


Junto a ellos compiten en esta categoría Ricky Martin, con “A quien quiera escuchar”, Julieta Venegas con “Algo sucede” y Alex Cuba con “Healer”, mientras que en el apartado de mejor álbum de rock latino, alternativo o urban los nominados son Bomba Estéreo, Natalia Lafourcade, Monsieur Periné, Pitbull y La Cuneta de Son Machín.
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="not3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                             <iframe width="560" height="315" src="https://www.youtube.com/embed/JkGTXuQBeXQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Confirmada la gran gira mundial de Daddy Yankee Vs. Don Omar, "The Kingdom"</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info programa-listado">
                                    <div>
								La gran gira mundial "The Kingdom: Daddy Yankee Vs. Don Omar" ya esta completamente confirmada. El tour arrancará el 3 de diciembre en San Juan de Puerto Rico. Los fanáticos podrán disfrutar de cuatro días de combate entre los dos exponentes mas grandes de la historia del genero urbano. La gira se llevará acabo por dos años y hay ya 60 fechas confirmadas.<br>
<br>


Como todos saben, tras el transcurso de la historia de ambos artistas no se la han llevado muy bien. Desde el reencuentro en la alfombra roja de los Billboard del 2009 se esta hablando de la supuesta gira mundial de los dos artistas. Fue hasta el 2015 que Pina Records hizo realidad este gran proyecto.<br>
<br>


El 24 de noviembre ambos estuvieron presentes en una rueda de prensa en el coliseo de Puerto Rico donde destacarían las siguientes palabras sobre la gran gira mundial.<br>
<br>


Daddy Yankee: "El publico va a tener la oportunidad de elegir quien es el campeón. Lo que te puedo garantizar es que el show va a tener un entretenimiento de alto nivel round por round. Tenemos eso que nos caracteriza en común, es un ser competitivo yo también. Admiramos el trabajo de cada cual, pero cuando uno tiene de frente a la competencia hay que hacer su trabajo".<br>
<br>


Don Omar: "Ambos gozamos de una gran trayectoria. Nuestra tarima es de 360 grados, es decir que Daddy Yankee podrá trabajar a 180 grados de la tarima y los otros 180 que quedan los trabajare yo. El publico quizás no es parte de la estrategia pero el publico va a poder ver como se va montando la segunda tarima de la parte de atrás para luego de los 20 minutos del show de Daddy Yankee la tarima gire y le de comienzo al show de Don Omar."<br>
<br>

									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="not4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                              <img src="img/noticia/big4.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Coldplay publicará su último álbum por streaming en Spotify</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info programa-listado">
                                    <div>
				-Nueva York recuerda a John Lennon en el 35 aniversario de su asesinato
Spotify explicó en un mensaje que “A Head Full of Dreams”, el séptimo y tal vez último álbum de este grupo de rock, estará disponible en su sitio a partir del viernes, una semana después de su lanzamiento.<br>
<br>


Coldplay no dio explicaciones sobre este retraso, pero el grupo tiene antecedentes. En 2014 esperó cuatro meses para que su obra anterior, “Ghost Stories”, pudiera escucharse en las plataformas de streaming.<br>
<br>


El objetivo es maximizar las ventas al momento de la salida del disco, una estrategia que en el mundo de la música es llamada “windowing”.<br>
<br>


Spotify ha enfrentado la crítica de los artistas porque ofrece a sus suscriptores música ilimitada de forma gratuita. No obstante, de sus 75.000 millones de usuarios en el mundo, 20 millones están abonados a una versión paga sin publicidad.<br>
<br>


Coldplay sí colocó su álbum en sitios de streaming pagos como Apple Music o Tidal, el servicio desarrollado por el magnate del rap Jay Z.<br>
<br>


La mayoría de los artistas han aceptado colocar sus trabajos en servicios de streaming, aunque algunos ofrecen resistencia. La cantante británica Adele, por ejemplo, se negó a difundir por esta vía su reciente disco “25″.<br>
<br>


También la estrella del pop Taylor Swift retiró el año pasado toda su discografía de Spotify y acusó a la empresa de compensar muy poco a los artistas.<br>
<br>



								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                   
                    <ul id="portfolio-grid" class="thumbnails row">
                       <li class="span3">
                            <div class="thumbnail">
                                 <img src="img/noticia/1.jpg" alt="project 1" width="272px" height="187px">
                                <a href="#single-project" class="more show_hide" rel="#not1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Lo Mejor de YouTube 2015 </h3>
                                <div class="mask"></div>
                            </div>
                        </li>
						<li class="span3">
                            <div class="thumbnail">
                              <img src="img/noticia/big2.jpg" alt="project 2"  width="272px" height="187px" >
                                <a href="#single-project" class="more show_hide" rel="#not2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Alejandro Sanz y Pablo Alborán optan al Grammy a mejor álbum 

</h3>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                              <img src="img/noticia/3.jpg" alt="project 3"  width="272px" height="187px">
                                <a href="#single-project" class="show_hide more" rel="#not3">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Confirmada la gran gira mundial de Daddy Yankee Vs. Don Omar,</h3>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                             <img src="img/noticia/4.jpg" alt="project 4"  width="272px" height="187px">
                                <a href="#single-project" class="more show_hide" rel="#not4">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Coldplay publicará su último álbum por streaming en Spotify</h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
 
        
        
        
        <!-- About us section start -->  <div id="single-project2">   </div>
    <div class="section primary-section" id="programas">
            <div class="container">
                
                
                
                
             <div class="title">
                    <h1><span>Programas</span></h1>
                </div>      
                
        <div style="padding-bottom: 25px;"></div>
        
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="prog1" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                            <img src="img/prog/1big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Arpegios de Venezuela</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
									<div><span>Lunes a Viernes
4:00 am / 5:30 am </span> <br>
Un espacio dedicado a los ritmos, historias y sabores de nuestra Venezuela</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="prog2" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/2big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Contra Reloj con Julissette Marín y Jonathan Polanco</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 5:30 am a 9:00 am </span></div>
                                    <div>Quieres llegar feliz a tu oficina? Disfruta un magazine cargado de buena vibra, mientras te acompañamos a preparar el desayuno,  salir con optimismo y llegar a tu destino con las mejores opciones del tránsito, bien informado, interactuando con las ocurrencias de este dúo y excelente música.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="prog3" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                             <img src="img/prog/3big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>ADN Informativo con Evelyn Miranda</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 12:00 pm a 1:00 pm   </span><br>

									Noticiero Meridiano que además brinda a través de entrevistas a destacadas personalidades de diferentes ámbitos temas informativos con una perspectiva analítica, diferente a la mera exposición de los hechos.
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="prog4" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/4big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Tecnobios con Jhonas Urbina</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 1:00 pm a 4:00 pm   </span><br>

									Explora  y descubre todo lo que acontece en el mundo de la Ciencia y la Tecnología con secciones de Salud, Ecología, Ciencias Espaciales e Historia. Aborda la actualidad tecnológica, sus aplicaciones, usos y abusos, conociendo las tendencias en una sociedad interconectada.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                     <!-- Start details for portfolio project 5 -->
                    <div id="prog5" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/5big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sin Formato con Nilson Pino</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 4:00 pm a 7:00 pm   </span><br>
									Después de una jornada laboral, mereces un retorno a casa con un programa ligero. La información veraz y precisa del Tránsito y el Avance de Noticias para cerrar el día. Acompañados de comentarios de variedad desde un punto de vista auténtico.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
                     <!-- Start details for portfolio project 6 -->
                    <div id="prog6" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/6big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>En Plenitud con Yesenia Ojeda</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 7:00 pm a 9:00 pm    </span><br>
								Finaliza el día con un reencuentro con la buena energía y los más completos comentarios de Vida y Salud para disfrutar un camino de armonía, equilibrio y bienestar.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
                     <!-- Start details for portfolio project 7 -->
                    <div id="prog7" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/7big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Música Sin Pausa</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Lunes a Viernes 9:00 pm a 10:00 pm     </span><br>
									Excelente Selección Musical que ofrece Platinum 98.7 FM.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                     <!-- Start details for portfolio project 8 -->
                    <div id="prog8" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/8big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Generación de Relevo <br>con Ahmed Bruzual</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 8:00 am a 10:00 am     </span><br>
									Un espacio para la reflexión acerca de los temas más comunes: emprendimiento, valores, cultura, derechos humanos, deporte y otros que acompañan el  desarrollo de  nuestra generación de relevo.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                     <!-- Start details for portfolio project 9 -->
                    <div id="prog9" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/9big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Tono Salud con Edwin Torres</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 10:00 am a 12:00 pm     </span><br>
									Espacio dedicado a la salud, abordando diversas patologías con médicos especialistas de las diversas sociedades científicas de Venezuela. Aliado de fundaciones y organizaciones sin fines de lucro y miembro activo de los capítulos médicos/científicos  de los diferentes estados a nivel nacional.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                     <!-- Start details for portfolio project 10 -->
                    <div id="prog10" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/10big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Al Aire Libre con Mary Luy</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 12:00 pm a 2:00 pm     </span><br>
									Conéctate con el medio ambiente de manera amigable y  las actividades lúdicas que contribuyen a  alegrar mente y espíritu. Para vivir verde. En un recorrido por las informaciones que contribuyen a la defensa y protección de nuestro planeta por organizaciones públicas y privadas que pueden convertirse en hábitos personales de cada individuo
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 10 -->
                     <!-- Start details for portfolio project 11 -->
                    <div id="prog11" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/11big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Años Intactos con José Novoa</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 2:00 pm a 4:00 pm     </span><br>
									Espacio que destaca las más variadas producciones pop que acompañaron la vida de aquellos que brillaron en las décadas de los 70´s  80´s  y 90´s.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 11 -->
                     <!-- Start details for portfolio project 12 -->
                    <div id="prog12" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/12big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Mundo Exclusivo con Jesús Leandro</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 4:00 pm a 5:00 pm   </span><br>
									Un paseo por las super estrellas de la musica pop/rock.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 12 -->
                     <!-- Start details for portfolio project 13 -->
                    <div id="prog13" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/13big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Special Music con Evelyn Miranda</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 5:00 pm a 7:00 pm    </span><br>
									Recorrido semanal a través de las expresiones musicales más importantes de la historia. Conciertos, versiones y unpluggled para melómanos.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 13 -->
                     <!-- Start details for portfolio project 14 -->
                    <div id="prog14" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/14big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Versiones con José Eduardo Pineda</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Sábados 7:00 pm a 8:00 pm   </span><br>
									60 minutos con las mejores interpretaciones de tus temas favoritos...versiones de grandes temas, clásicos que han marcado pauta y los  Covers  mas importantes de la historia de la música a nivel mundial.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 14 -->
                     <!-- Start details for portfolio project 15 -->
                    <div id="prog15" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/15big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Planeta Reggae con Freddy Dj Rude Boy</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Domingos 8:00 am a 10:00 am   </span><br>
									Música para tu ida al mar, para degustar de un buen fin de semana, de esa aventura libre con el medio ambiente, con lo natural y lo relajante de que el Caribe tiene para ofrecer.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 15 -->
                     <!-- Start details for portfolio project 16 -->
                    <div id="prog16" class="toggleDiv row-fluid single-project2">
                        <div class="span6">
                              <img src="img/prog/16big.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Domingo de Resurrección con Vladimiro Rivas</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div><span>Domingos 6:00 pm a 7:00 pm    </span><br>
									Colección musical con las biografías de los artistas que en vida hicieron historia y hoy son leyendas dejando  una huella profunda dentro del universo sonoro, bien sea dentro de sus agrupaciones, carreras como solistas o proyectos musicales.
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 16 -->
                   
                    <ul id="portfolio-grid" class="thumbnails row">
                       <li class="span2">
                            <div class="thumbnail amarillo">
                                 <img src="img/prog/1.jpg" alt="project 1">
                                <a href="#single-project2" class="more show_hide" rel="#prog1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Arpegios de Venezuela<br>
Lunes a Viernes<br>
4:00 am a 5:30 am  
</h3>
                                <div class="mask"></div>
                            </div>
                        </li>
						<li class="span2">
                            <div class="thumbnail amarillo">
                              <img src="img/prog/2.jpg" alt="project 2">
                                <a href="#single-project2" class="more show_hide" rel="#prog2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Contra Reloj<br>
Lunes a Viernes<br>
5:30 am a 9:00 am  </h3>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span2">
                            <div class="thumbnail amarillo">
                              <img src="img/prog/3.jpg" alt="project 3">
                                <a href="#single-project2" class="show_hide more" rel="#prog3">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>ADN Informativo<br>
Lunes a Viernes<br>
12:00 m a 1:00 pm    </h3>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/4.jpg" alt="project 4">
                                <a href="#single-project2" class="more show_hide" rel="#prog4">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Tecnobios<br>
Lunes a Viernes<br>
1:00 pm a 4:00 pm  </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                          
                                <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/5.jpg" alt="project 5">
                                <a href="#single-project2" class="more show_hide" rel="#prog5">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sin Formato<br>
Lunes a Viernes<br>
4:00 pm a 7:00 pm    </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                           <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/6.jpg" alt="project 6">
                                <a href="#single-project2" class="more show_hide" rel="#prog6">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>En Plenitud<br>
Lunes a Viernes<br>
7:00 pm a 9:00 pm  </h3>
                              <div class="mask"></div>
                            </div>
                          </li>
                       
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/8.jpg" alt="project 8">
                                <a href="#single-project2" class="more show_hide" rel="#prog8">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Generación de Relevo<br>
Sábado<br>
8:00 am a 10:00 am </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/9.jpg" alt="project 9">
                                <a href="#single-project2" class="more show_hide" rel="#prog9">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Tono Salud<br>
Sábado<br>
10:00 am a 12:00 pm</h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/10.jpg" alt="project 10">
                                <a href="#single-project2" class="more show_hide" rel="#prog10">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Al Aire Libre<br>
Sábado<br>
12:00 pm a 2:00 pm</h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/11.jpg" alt="project 11">
                                <a href="#single-project2" class="more show_hide" rel="#prog11">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Años Intactos<br>
Sábado<br>
2:00 pm a 4:00 pm  </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/12.jpg" alt="project 12">
                                <a href="#single-project2" class="more show_hide" rel="#prog12">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Mundo Exclusivo<br>
Sábado<br>
4:00 pm a 5:00 pm </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/13.jpg" alt="project 13">
                                <a href="#single-project2" class="more show_hide" rel="#prog13">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Special Music <br>
Sábado<br>
5:00 pm a 7:00 pm </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/14.jpg" alt="project 14">
                                <a href="#single-project2" class="more show_hide" rel="#prog14">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Versiones<br>
Sábado<br>
7:00 pm a 8:00 pm </h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/15.jpg" alt="project 15">
                                <a href="#single-project2" class="more show_hide" rel="#prog15">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Planeta Reggae<br>
Domingo<br>
8:00 am a 10:00 am</h3>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                               <li class="span2">
                            <div class="thumbnail amarillo">
                             <img src="img/prog/16.jpg" alt="project 16">
                                <a href="#single-project2" class="more show_hide" rel="#prog16">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Domingo de Resurrección<br>
Domingo<br>
6:00 pm a 7:00 pm </h3>  <div id="nosotros">  </div>
                              <div class="mask"></div>
                            </div>
                      
                        </li>
                    </ul>
                </div>        
            </div>
        </div>
  
        <div id="tips">
           
        </div>
        <!-- Price section start -->
        <div id="noticias" class="section secondary-section"></div>
        <!-- Price section end -->
        <!-- Newsletter section start -->
            
        <div class="section primary-section barra" id="alianzas">
            <div class="container">
                
           <div style="padding-bottom:5px;"></div>
                <div class="title ">
                    <h1><span> Nosotros</span></h1>
                </div>
              <br>
<br>

              <div class="row-fluid animated fadeInDown">
                    <div class="span8 centered">
                    <div class="highlighted-box ">
                            <h2>Platinum Tu Radio Real</h2>
                            <p>	Durante más de 9 años hemos afianzado un esquema de radio dirigido a un público de hombres y mujeres de 25 años en delante de estrato socioeconómico B y C, quienes eligen la buena programación de la mano de un equipo de profesionales y la mejor selección musical entre baladas, pop y rock en inglés y español desde los años 70, 80, 90, 2000 hasta lo más reciente. Buscando el equilibrio perfecto para complacer el gusto de una audiencia REAL </p>
                            
                        </div>
                   </div>
                    <div class="span4">
                    
                    <script type="text/javascript">
(function(){
var theSwf=["7.swf", "7.swf", "7.swf", "7.swf"];
theSwf.sort(function() {return 0.5 - Math.random();})

document.write('<object class="img-responsive"\n\ classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"\n\
           codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"\n\
           width="370" height="300">\n\
			<param name="movie" value="'+theSwf[0]+'"> \n\
			<param name="quality" value="high">\n\
			<param name="wmode" value="transparent">\n\
			<param name="menu" value="false">\n\
			<!--[if !IE]> <-->\n\
			<object data="'+theSwf[0]+'"\n\
					width="370" height="300" type="application/x-shockwave-flash">\n\
			 <param name="quality" value="high">\n\
			 <param name="wmode" value="transparent">\n\
			 <param name="menu" value="false">\n\
			 <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer">\n\
			 FAIL (the browser should render some flash content, not this).\n\
			</object>\n\
			<!--> <![endif]-->\n\
		   </object>\n');
		   })();
</script>
                    
                    
                      
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contacto" class="contact">
            <div class="section cuarta-section" style="background-color:#000;">
                <div class="container">
                    <div class="title">
                        <h1><span>Contacto</span>
</h1>   <br><br>
                    </div>
                </div>
                <div class="map-wrapper">
            
              
      <div class="map-canvas" id="map-canvas"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=zCGfaSgsnvu0.k2iJZVjmVz3o" width="100%" height="496"></iframe></div>
     
                    <div class="container">  
                        <div class="row-fluid">
                            <div class="span5 contact-form centered" style="margin-top:-50px;" >
                                <h3>Donde Estamos?</h3> <p style="margin-top:-30px; color:#333; font-size:12px;">
Av PPal de Castillejo, Centro Comercial Castillejo, piso 1, Local P 01 - 19. Guatire, Edo. Miranda.</p>

                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Exito!</strong>Mensaje Enviado.</div>
                                <div id="errorSend" class="alert alert-error invisible">Hay un Error.</div>
                                <form id="contact-form" action="index.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="nombre" name="nombre" placeholder="* Su Nombre..." />
                                            <div class="error left-align" id="err-name">Colocar Nombre.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Su Correo..." />
                                            <div class="error left-align" id="err-email">Colocar Correo.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="mensaje" id="mensaje" placeholder="* Su comentario..."></textarea>
                                            <div class="error left-align" id="err-comment">Colocar Mensaje.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><div class="red_separator2"> </div>
                
            </div>
        </div>
        <!-- Contact section edn -->
        
      
        <div class="quinta-section"> 
   
       <div class="container">
                 <div class="section ">
                <div class="container">
                    <div class="row">	
    
                        <div class="span4">
                            <div class="testimonial" style="text-align:center;"  >
                                <img src="platinum/iconcorreo.png"><br><br>

<div class="whopic" style="border-top:3px solid #e09300; ">
                <div class="arrow"></div><br>
                                    Correos:<br>
                              <a href="mailto:contacto@platinum.com.ve">contacto@platinum.com.ve</a><br>   <a href="mailto:ventas@platinum.com.ve">ventas@platinum.com.ve</a></div>
                          </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial" style="text-align:center;">
                               <img src="platinum/icontelefono.png"><br><br>
                                <div class="whopic" style="border-top:3px solid #e09300">
                                  <div class="arrow"></div><br>
                                   Teléfonos:<br>+58(212) 3442293
                                   <br>+58(414) 2904496
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial" style="text-align:center;">
                           <img src="platinum/iconubicacion.png"><br><br>
                              <div class="whopic"  style="border-top:3px solid #e09300">
                                    <div class="arrow"></div>
                                  <br>
                                   Horario de Atención:<br>
                                  8:00 A.M. a 4:00 P.M.
                              </div>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">

                </div>
            </div>
					                    <div class="span12 center contact-info" style="font-size:18px;">
                     

                  
                  
		
                    </div>
                </div>
      
      
       </div>
      <div class="red_separator2"> </div>
        <!-- Footer section start -->
        <div class="footer">
    
                   
    
            <div class="container">
                
           <div style="padding-bottom:5px;"></div>
          
              <br>
<br>

              <div class="row-fluid animated fadeInDown">
                    <div class="span8 centered">
                    <div class="menu-footer">
        
        
        
        <ul class="nav">
						
		  <li class="menu_divide"><a href="#home">Inicio</a></li>
			
							
			
						
							<li class="menu_divide"><a href="#videos">Videos</a></li>
		
							<li class="menu_divide"><a href="#noticias">Noticias</a></li>
							<li class="menu_divide"><a href="#programas">Programas</a></li>
                            <li class="menu_divide"><a href="#nosotros">Nosotros</a></li>
							<li class="menu_divide"><a href="#contacto">Contacto</a></li>
					
					
							<li class="menu_divide">&nbsp;</li>
						</ul>
                   </div>
                   </div>
                    <div class="span4">Creado por:
                    <a href="http://www.exodatasolutions.com" target="_blank"><img src="platinum/logoexo.png"  class="img-responsive"></a> </div>
                </div>
            </div>
        
            
            
            
            
            
            
            <p>&copy; 2015 All Todos Los Derechos Reservados - Platinum</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
      
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>