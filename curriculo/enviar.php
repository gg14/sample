<!DOCTYPE html> 
<html> 
<head> 
	<title>Guillermo Gutierrez D Online</title> 
	<meta name="viewport" content="width=device-width, user-scalable=no">  
    <link rel="stylesheet" href="css/themes/blue.min.css" />
    <link rel="stylesheet" type="text/css" href="css/themes/default/jquery.mobile.structure-1.2.0.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.2.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
</head> 
<body> 

<div data-role="dialog" id="enviar">
	
    <div data-role="header">
		<h1>Notification</h1>
	</div><!-- /header -->

	<div data-role="content">	
   <?php
       $name = $_POST['name'];
	   $email = $_POST['email'];
	   $pais = $_POST['pais'];
       $message = $_POST['message'];
       $to = 'neoxsaibot@gmail.com';
       $subject = 'Contacto via web';

       $body = "Nombre: $name\n E-Mail: $email\n Pais: $pais \n Mensaje:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
			   
           echo '	   
			<h3>Message sent.</h3>
			<a href="index_eng.html" data-role="button" data-rel="back" data-theme="a">Close</a>       ';
				 
           } else {
           echo '
		   <h3>Message not sent</h3>
		   <p>Please try later</p>
			<a href="index_eng.html" data-role="button" data-rel="back" data-theme="c">Close</a> ';
           }
       }
    ?>
</div></div></div>
</body>