<html>
<head>
    <title>
        http://Linugux.ddns.net
    </title>
    <link rel="canonical" href="https://linugux.ddns.net" />
    <link rel="icon" type="image/png" href="linugux.jpg">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <link rel="stylesheet" type="text/css" href="/asciinema-player.css" />
    <meta name="description" content="Creation and Design For Linugux" />
    <meta name="viewport" content="width=460" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#3e98ba">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W3WJMK9');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3WJMK9" height="0" width="0" style="display:none;visibility hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        $(document).ready(function(){
          $("#code").click(function(){
            $(".about").hide(1618);
            $(".home").hide(1618);
            $(".contact").hide(1618);
            $(".code").show(1618);
          });
          $("#contact").click(function(){
            $(".about").hide(1618);
            $(".home").hide(1618);
            $(".contact").show(1618);
            $(".code").hide(1618);
          });
          $("#about").click(function(){
            $(".about").show(1618);
            $(".home").hide(1618);
            $(".code").hide(1618);
          });
          $("#home").click(function(){
            $(".home").show(1618);
            $(".about").hide(1618);
            $(".contact").hide(1618);
            $(".code").hide(1618);
          });
        });

    
    Push.Permission.request();

    Push.create('Hi there!', {
    body: 'Welcome http://linugux.ddns.net',
    icon: 'linugux.jpg',
    timeout: 8000,               // Timeout before notification closes automatically.
    vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
    onClick: function() {
        // Callback for when the notification is clicked. 
        window.focus();
        console.log(this);
   }
    });
    
    </script>
    <script type="text/javascript">
         function notifyMe() {
            //Vamos a comprobar si el navegador es compatible con las notificaciones
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            }
            // Vamos a ver si ya se han concedido permisos de notificación
            else if (Notification.permission === "granted") {
                // Si está bien vamos a crear una notificación
                var body =  document.getElementById("reloadcowsay");
                var icon = "linugux.jpg";
                var title = "Notificación";
                var options = {
                    body: body,
                    icon: icon,
                    lang: "ES",
                    renotify: "true",
                    vibrate: [100, 100, 100],
                }
                var notification = new Notification(title,options);
                var audio = new Audio('notificacion.mp3');
                audio.play();
                notification.onclick = function () {
                    //action
                    audio.play();
                };
                setTimeout(notification.close.bind(notification), 10000);

                Push.create('Push' ,{ 
                    body: document.getElementById("reloadcowsay"),
                    icon: 'Linugux.gif',
                    timeout: 10000,
                    vibrate: [100, 100, 100]});
                    //action
                setTimeout(function() {audio.play();}, 10000);
            }
            // De lo contrario, tenemos que pedir permiso al usuario
            else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {
                    // Si el usuario acepta, vamos a crear una notificación
                    if (permission === "granted") {
                        var notification = new Notification("Gracias, Ahora podras recibir notifiaciones de nuestra página");
                    }
                });
            }
            // Por fin, si el usuario ha denegado notificaciones, y usted
            // Quiere ser respetuoso no hay necesidad de preocuparse más sobre ellos.
        }
        </script>
</head>
<body style="background-color: black; color: white;">
    <section id="header">
                <div class="typewriter">
                    <h1 id="reloadmsg" style="text-transform: capitalize; font-size: 9px; color : white;position:absolute;" ></h1>
                </div>
                <div class="home">
                    <div class='at-container'><br>                
                        <img width="10%" src="linugux.jpg" style="top: 10px; position: absolute;" align="right" />
                        <div class="typewriter" style="position: relative;" align="center">
                        <h1 id="reloadtitle" style="top: 20px; font-size: 30px;"><a>Linugux.ddns.net</a></h1>
                        </div>
                        <div style="position: relative;" id="reloadphp"  class="navigation" align="right"></div>
                        <br><br>
                        <br><hr>
                        <div>
                            <p style="color: white ;" align="justify" >
                              <!--  <tt id="reloadmsgblue" >
                                   <?php include 'fortuneCowsay.php'; ?>
                                </tt>-->
                                <tt>
                                    <pre id="reloadcowsay" style="font-size: 16px; color: white; background-color: black;">
                                   <?php include 'cowsay.php'; ?>
                                    </pre>
                                </tt>
                            </p>
                        </div>
                    </div>
            </div>
        <script>
        function getResolution() {
            alert("Your screen is: " + screen.width + "x" + screen.height);
        }
        </script>
        <br>
        <div class="home" align="left">
            <a class="linugux" id="title" style="font-size: 22px">Creation and <br>Design</a>
        </div>
        <div id="">
            <ul class="navigation" style="position: relative; background-color: black">
                <li><button id="home" style="background-color: black"><a>Home</a></button></li>
                <li><button id="code" style="background-color: black"><a>Code</a></button></li>
                <li><button id="about" style="background-color: black"><a>About</a></button></li>
                <li><button id="contact" style="background-color: black"><a>Contact</a></button></li>
                <!--<li><button style="background-color: black" onclick="notifyMe()"><a>NotifY</a></button></li>
                <li><button style="background-color: black" onclick="getResolution();"><a>Resolution</a></button></li>-->

                <!--
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="writings.html">Writings</a></li>-->
                <div class="social">
                    <a href="http://twitter.com/linugux" target="_blank" title="twitter">
                        <svg class="icons" width="21" height="21" viewBox="0 0 21 21">
                            <path d="M18.502 4.435a6.892 6.892 0 0 1-2.18.872 3.45 3.45 0 0 0-2.552-1.12 3.488 3.488 0 0 0-3.488 3.486c0 .276.03.543.063.81a9.912 9.912 0 0 1-7.162-3.674c-.3.53-.47 1.13-.498 1.74.027 1.23.642 2.3 1.557 2.92a3.357 3.357 0 0 1-1.555-.44.15.15 0 0 0 0 .06c-.004 1.67 1.2 3.08 2.8 3.42-.3.06-.606.1-.934.12-.216-.02-.435-.04-.623-.06.42 1.37 1.707 2.37 3.24 2.43a7.335 7.335 0 0 1-4.36 1.49L2 16.44A9.96 9.96 0 0 0 7.355 18c6.407 0 9.915-5.32 9.9-9.9.015-.18.01-.33 0-.5A6.546 6.546 0 0 0 19 5.79a6.185 6.185 0 0 1-1.992.56 3.325 3.325 0 0 0 1.494-1.93"></path>
                        </svg>
                    </a>
                </div>
            </ul>
            </div>
    </section>
    <script>
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadphp').load('indexphp.php');//actualizas el div
   }, 1000 );
});
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadtitle').load('reloadtitle.php');//actualizas el div
   }, 5000 );
});
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadmsg').load('reloadmsg.php');//actualizas el div
   }, 1618 );
});
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadmsgblue').load('fortuneCowsay.php');//actualizas el div
   }, 1000 );
});
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadcowsay').load('cowsay.php');//actualizas el div
   }, 1000 );
});$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#reloadcowsay').load('cowsay.php');//actualizas el div
   }, 1000 );
});
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    //notifyMe();//actualizas el div
   }, 60000 );
});
</script>
<style> 
    div.at-container {
  display: ;
  align-items: ;
  justify-content: ;
  height: all;
  width: all;
  background-color: black;
}
.at-item {
    top: 220px;
  width: 90px;
  height: 70px;
  background-color:#ffe672;
  animation-name: flip-horizontal;
  animation-duration: 2.2s;
  animation-timing-function: ease;
  animation-delay: 0s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-fill-mode: none;
}
@keyframes flip-horizontal {
  0%{
    -webkit-transform: rotateX(0);
    transform: rotateX(0);
  }
  100%{
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
  }
}
div 
.linugux {
    top: -40PX;
  width: 120px;
  height: 10px;
  background: ;
  position: relative;
  animation: mymove 17s infinite;
  animation-timing-function: linear;

}

@keyframes mymove {
  from {left: 0px;}
  to {left: 300px;}
}

.typewriter h1 {
    color: #C6E4F3;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .1em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .2em; /* Adjust as needed */
  animation: 
    typing 13s steps(50, end),
    blink-caret .1618s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
</style>
<section id="content" class="code" style="display: none">
    <div class="navigation" align="justify">
        <div class="typewriter">    
            <p>HomeServer = Raspberry Pi +b + SD 2GB + 5v.<hr>  
                <?php $a=shell_exec('uname -a');echo "<a style='background-color:black;'>$a</a><br>";?>
                <hr>
                The MariaDB command-line tool
                <?php $b=shell_exec('mariadb -V');echo "<a style='background-color:black;'>$b</a>";?>
                <hr>
                PHP Command Line Interface 'CLI'
                <?php $b=shell_exec('php7.0 -v');echo "<a style='background-color:black;'>$b</a>";?>
                <hr>
                Hypertext Transfer Protocol Server
                <?php $b=shell_exec('apache2 -v');echo "<a style='background-color:black;'>$b</a>";?>
                <hr>
                <div align="center" style="background-color: black">
                    <ul>
                        <li><a href="files">Files</a></li>
                        <li><a href="fileBashRPi2021">Files2</a></li>
                    </ul>
                </div>
            </p>
        </div>
    </div>
</section>


    <section id="content" class="about" style="display: none">
        <div class="fullitem">
		      <?php echo date('l, F jS, Y, h:m:s.');?><hr>
            <p align="justify">
                <a href="https://linux.org">Linux</a> engineer computer sciences on building projects that make people to share. My site web of <a href="https://www.google.com/search?client=ubuntu&channel=fs&q=linugux&ie=utf-8&oe=utf-8">http://linugux.ddns.net</a> have been highly ranked in the Google, and I have been greatyfull to see some of HomeServer on <a href="https://raspberrypi.org">Raspberry Pi</a> processor <a href="https://www.arm.com/">ARM</a> with System Operative <a href="https://www.raspbian.org/">Raspbian 8 Jessie</a> use General Public License <a href="https://www.gnu.org/licenses/gpl-3.0.html">(GNU)</a> in international advertising campaigns, magazines, and websites around the world.
            </p>
        </div>
        <div class="fullitem" align="center">
            <hr>
            <b>Youtube Channel</b><br>
            <a href="https://youtube.com/user/linugux/videos" target="_blank"><img src="linuguxLogoGoogle.jpg"/></a>
            <div class="caption">
                <a class="title" href="https://youtube.com/user/linugux/videos" target="_blank">Creation And Design For Linugux</a>
                <p>
		    Differentiate between build variants lenguages of programmation.
		</p>
            </div>
            <div class="fullitem" align="center">
                <script src="/asciinema-player.js"></script>
                <asciinema-player src="433901.json" cols="80" rows="24"></asciinema-player>
                <hr>
		<asciinema-player src="433909.json" cols="80" rows="24"></asciinema-player>
		<hr>
                <script type="text/javascript" src="//rc.revolvermaps.com/0/0/6.js?i=2h93hvpxcgq&amp;m=17&amp;s=230&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=10&amp;bv=100&amp;lx=-400&amp;ly=400&amp;hi=70&amp;he=27&amp;hc=a8ddff&amp;rs=80" async="async"></script>
		<hr>
		<p>
			<a>WebCam Raspberry Pi processing captured image each 10 minutes [ $ <. ]</a>
		<br>
		<a href="pepe.jpg"><img width="50%" src="pepe.jpg"></a><hr>
		</p>
		</div>
    </div>
    </section>
    <section id="content" style="display: none;" class="about">
        <div class="fullitem">
            <p align="">
            <b>About Me</b>
            <tt>
                I´m Engineer Computer Sciences on "Linux/Gnu".<br>
                My Name is Nestor Garrido 
            </tt>
            </p>
            <p style="background-color: black" class="navigation" align="center">
                <a>Creation and Design<br>for<br>Linugux</a><br>
                <a>http://Linugux.ddns.net</a>
            </p>
        </div>
        <div class="fullitem" align="center">
            <div class="caption">
                <p>
                    <a href="linugux.jpg"><img src="linugux.jpg"></a>
                    <a href="Linugux.gif"><img src="Linugux.gif"></a>
                    <a href="linuguxLogoWhatsapp.jpg"><img src="linuguxLogoWhatsapp.jpg"></a>
                </p>
            </div>
        </div>
    </section>
    <section id="content" style="display: none;" class="contact">
        <div class="fullitem" style="background-color: black" align="center">
            <div class="navigation">
                <p>
                    <a href="mailto:linugux@gmail.com">Linugux@gmail.com</a>.<br>
                    <a href="https://wa.me/525624600477">+52 56 2460 0477</a>
                </p>
            </div>
        </div>
    </section>
    <section id="content" style="display: none;" class="code">
        <div class="fullitem" style="background-color: black" align="center">
            <div class="navigation" align="left">
                <ul>
                    <li><a href="http://4inkpress.ddns.net">Page Site Web "4inkpress" - Serigrafia</a></li>
                    <li><a href="pages/index2016-11-21.html">Page Site Web 2016 Linugux.ddns.net</a></li>
                    <li><a href="https://github.com/linugux/linuguxWebSiteAgo21">Repository this web Version 1.0 ...</a></li>
                </ul>
                <p>
                    <a>Hello Mundo ... code JavaScript</a><br>
                    <tt>
                        <a> document.   write("Hola Mundo"); </a><br>
                    </tt>
                        <script type="text/javascript">
                            document.write("<a>Hola Mundo</a>");
                        </script>
                </p>
            </div>
        </div>
    </section>
</body>
</html>
