<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>

<meta charset="utf-8">
<title>Nexsmedia</title>
<META NAME="keywords" CONTENT="Diseño web, paginas web, webmaster">
<META NAME="description" CONTENT="Ofrecemos soluciones web funcionales para su negocio.">
<META NAME="author" CONTENT="Nexsmedia">
<META NAME="ROBOTS" CONTENT="ALL">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="stylesheets/base.css">
<link rel="stylesheet" href="stylesheets/skeleton.css">
<link rel="stylesheet" href="stylesheets/layout.css">
<link rel="stylesheet" type="text/css" href="stylesheets/flexslider.css">
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/nav.js"></script>

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div id="page-wrap">
<div class="header">
	<div class="container">
	  <div class="sixteen columns">
      
              <div class="navbar navbar-fixed-top">
                  <div class="navbar-inner">
                    <div class="container">
                      <a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </a>
            <div id="logo" class="alpha">NEXSMEDIA</div>
                      <div class="nav-collapse">
                        <ul class="nav two-thirds columns omega">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="clientes.html">Clientes</a></li>
                          <li><a href="contacto.html">Contacto</a></li>
                        </ul>
                      </div><!--/.nav-collapse -->
                    </div>
                  </div>
                </div>
      </div><!--16col-->
    </div><!--container-->
</div><!--header-->

<div id="page_effect" style="display:none;">

	<div class="container">
	  <div class="sixteen columns">

    <div id="formulario">

  <?php
       $name = $_POST['name'];
	   $email = $_POST['email'];
	   $pais = $_POST['pais'];
       $message = $_POST['message'];
       $to = 'nexsmedia@gmail.com';
       $subject = 'Contacto via web';

       $body = "Nombre: $name\n E-Mail: $email\n Pais: $pais \n Mensaje:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<br><p class="titulo" style="text-align:center;"><h2>Mensaje enviado!</h2> </p><br>
		 		 <p style="text-align:center;"><h3>Sera contactado en la brevedad posible</h3></p>';
           } else {
           echo '<br><br><p style="text-align:center;>Error, mensaje no enviado, por favor intentar de nuevo</p><br><br>';
           }
       }
    ?>

    </div>
      </div><!--16col-->
    </div><!--container-->
</div></div>
<footer id="footer" class="two column"><br>
	<div class="container">Nexsmedia © 2012 &nbsp;&nbsp;<img src="images/resp.png" width="82" height="25" alt="esta web esta dise&ntilde;ada para multipantallas"> 
  <p id="copy"><a href="http://twitter.com/Nexsmedia" class="twitter-follow-button" data-count="none">Siguenos @nexsmedia</a>
  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </p>
    </div><!--container-->
</footer>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20984370-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>