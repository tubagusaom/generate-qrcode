<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="ICI" /> <!-- website name -->
	<meta property="og:site" content="https://itconsultant.biz.id/" /> <!-- website link -->
	<meta property="og:title" content="IT CONSULTANT INDONESIA"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="IT CONSULTANT INDONESIA" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="https://itconsultant.biz.id/images/t3b3313_transparent.png" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://itconsultant.biz.id/" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>IT CONSULTANT INDONESIA</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/maintenance.png">

    <!-- <script>
        var w = window.innerWidth;
        var h = window.innerHeight;

        var x = document.getElementById("demo");
        
        alert(w + ' - ' + h);
    </script> -->
</head>
<body>




    
    <!-- Particles.js Container -->
    <div id="particles-js"></div>

    <!-- Header -->
    <header id="header" class="header">
        
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="logo-text" href="index.html">COMO</a> -->

        <!-- Image Logo -->
        <a href="https://itconsultant.biz.id/" target="_blank">
            <img class="logo-image" src="images/t3b3313_transparent.png" alt="alternative">
        </a> 


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>ICI Under Construction</h1>
                        <p class="p-large">We love to create dependable business solutions for companies of all sizes and any industry. Our goal is to improve accuracy and efficiency to reduce operational costs</p>
                        
                        <!-- Sign Up Form -->
                        <form id="signUpForm" data-toggle="validator" data-focus="false">
                            <!-- <div class="form-group">
                                <input type="email" class="form-control-input" id="semail" required>
                                <label class="label-control" for="semail">Email address</label>
                                <div class="help-block with-errors"></div>
                            </div> -->
                            
                            <?php
                                $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
                                $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            ?>

                            <div class="form-group">
                                <a href="<?=$CurPageURL?>fitur/qrcode-generator" target="_blank">
                                    <button type="button" class="submit-button-tb">
                                        <i class="fa fa-hand-pointer" style="transform: rotate(100deg);"></i> Other Features
                                    </button>
                                </a>
                            </div>
                            <div class="form-message">
                                <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of sign up form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->

        <!-- Social Links -->
        <div class="social-container">
            <span class="fa-stack">
                <a href="https://www.linkedin.com/in/tera-byte/" target="_blank">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="https://twitter.com/Tera_Byte_" target="_blank">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="https://www.instagram.com/tera.bytee/" target="_blank">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="https://www.facebook.com/Rock.Sla.N.ker.RolL" target="_blank">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="mailto:ter4.byte@yahoo.com">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope-open-text fa-stack-1x"></i>
                </a>
            </span>
        </div> <!-- end of social-container -->
        <!-- end of social links -->
        
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/particles.min.js"></script> <!-- Particles for background effects -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>