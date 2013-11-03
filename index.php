<?php
	
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['required_message'])){
        $firstname = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['required_message'];

        if(!empty($_POST['name']) && !empty($_POST['email'])  && !empty($_POST['required_message'])){
           
                if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
                    echo '<script>alert("E-mail incorrect.");</script>';
                    ?><script>window.setTimeout("location=('/#contact');",1);</script><?php
                }else{
                    
                   
                   
                        $destinataire="124643@supinfo.com";
                        $sujet="Formulaire de contact mon site";
                        $message="Un nouveau message est arrivé depuis mon site\n \Nom : $firstname \nEmail : $email \n Message :\n $message";
                        $entete = "From: ". $firstname ." <" . $email . ">\r\n"; 

                        mail($destinataire,$sujet,$message,$entete);

                         ?>
                         <script>
                            
                            window.setTimeout("location=('/#contact?envoi=1');",0);

                         </script>
                        <?php
                       
                }
            
        }
    }
	
?>
<!DOCTYPE HTML>
<!--
	Prologue 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Thibault Monteiro - Analyste Programmeur</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAGEAAAAAAAAAAAAAAAAAAAAAAAAAYQAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAGEAAAD/AAAA/wAAAGEAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYQAAAP8AAAD/AAAAYQAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGEAAAD/AAAA/wAAAP8AAAD/AAAAYQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAGEAAAD/AAAA/wAAAGEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAYQAAAP8AAAD/AAAAYQAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAGEAAAAAAAAAAAAAAAAAAAAAAAAAYQAAAP8AAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAD//wAA9+8AAOfnAADP8wAAn/kAAD/8AAA//AAAn/kAAM/zAADn5wAA9+8AAP//AAD//wAA//8AAA==" rel="icon" type="image/x-icon" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<style type="text/css">
        input.error {
            border: 1px solid red;
            background-color:red;
        }
        
        textarea.error {
            border: 1px solid red;
            background-color:red;
        }

        
    
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#validate").validate({rules: {
                pass2: {
                    equalTo: "#pass1"
                }
            }});
        });
        
        $.extend($.validator.messages, {
            required: "",
            remote: "votre message",
            email: "Champ invalide",
            url: "votre message",
            date: "votre message",
            dateISO: "votre message",
            number: "Champ invalide",
            digits: "votre message",
            creditcard: "votre message",
            equalTo: "votre message",
            accept: "votre message",
            maxlength: jQuery.validator.format("votre message {0} caractéres."),
            minlength: jQuery.validator.format(""),
            rangelength: jQuery.validator.format("Le code postal doit contenir entre {0} et {1} caractéres."),
            range: jQuery.validator.format("votre message  entre {0} et {1}."),
            max: jQuery.validator.format("votre message  inférieur ou égal à {0}."),
            min: jQuery.validator.format("votre message  supérieur ou égal à {0}.")
        });
    </script>
    <script>
      function limiteur(theid)
        {
        maximum = 50;
        champ = document.getElementById(theid);
        indic = document.getElementById(theid+"name");
        
        if (champ.value.length > maximum)
          indic.innerHTML = 0;
        else 
          indic.innerHTML = maximum - champ.value.length;
        }
    </script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo" style="display:none">
							<span class="image avatar48"><img src="http://www.gravatar.com/avatar/54ba3e0ca244afc4604a441e6f9db5fc?s=80" alt="" /></span>
							<h1 id="title">Thibault Monteiro</h1>
							<span class="byline">Analyste Programmeur</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-home">Profil</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Parcours</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="icon icon-user">Compétences</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="icon icon-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a target="_blank" href="http://www.twitter.com/WIPEOUT2197" class="icon icon-twitter"><span>Twitter</span></a></li>
							<li><a target="_blank" href="http://www.facebook.com/thibault.monteiro" class="icon icon-facebook"><span>Facebook</span></a></li>
							<li><a target="_blank" href="https://github.com/WIPEOUT2197" class="icon icon-github"><span>Github</span></a></li>
							<li><a target="_blank" href="http://dribbble.com/WIPEOUT2197" class="icon icon-dribbble"><span>Dribbble</span></a></li>
							<li><a target="_blank" href="mailto:thibault.monteiro@supinfo.com" class="icon icon-envelope"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">
							<div id="logoHeader" style="height:350px; overflow:hidden; width:115%; display:none">
								<a href="http://ineedchemicalx.deviantart.com/art/Moonscape-381829905" class="image featured logoHeaderTop"><img src="images/header.png" alt="" /></a>
							</div>
							<header>
								<h2 class="alt">Thibault Monteiro<br /></h2>
								<h4 class="alt">Analyste Programmeur<br /></h4>
							</header>
							
							<p>Je suis actuellement en 4<e>ème</e> année du cycle ingénierie de l'ESI SUPINFO (Master 1), jeune développeur et interessé par toutes les nouvelles technologies.<br>
							
							Me tenir toujours informé des dernières actualités informatiques est l'une de mes priorités. <br>La pratique du piano et de la voile depuis mon plus jeune âge me permet aussi de sortir du monde de l'IT.<br>
							Auto-Entrepreneur et Formateur, j'aime relever des défis. </p>

							<footer>
								<a href="CV.pdf" class="button scrolly" download="Thibault Monteiro - CV">Télécharger mon CV</a>
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2>Parcours</h2>
							</header>
							
							<?php
							include("parcours/index.html");
							?>
							

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Compétences</h2>
							</header>

							<a href="http://ineedchemicalx.deviantart.com/art/Pasadena-357650036" class="image featured"><img height=400 src="images/competences.jpg" alt="" /></a>
							
							<?php
							include("competences/index.html");
							?>

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

						
							
							<form method="post"  id="validate"  name="validate" action="/#contact">
								<div class="row half">
									<div class="6u"><input type="text" class="required text" name="name" placeholder="Nom" /></div>
									<div class="6u"><input type="email" class="email text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row half">
									<div class="12u">
										<textarea name="required message" minlength="50" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Envoyer</a>
									</div>
								</div>
							</form>

						</div>
					</section>
			
			</div>

		
	<script>
	$( "#logo" ).fadeIn( "slow" );
	$( "#logoHeader" ).fadeIn( "slow" );
	</script>

	</body>
</html>