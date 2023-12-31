<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ICI - Generate QR Code</title>
    <meta name="description" content="IT CONSULTANT INDONESIA" />
    <meta name="keywords" content="generate, qr, Generate QR, qrcode, barcode" />

    <!-- Favicon  -->
    <link rel="shortcut icon" href="../../images/t3b3313_yellow_circle.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../images/t3b3313_yellow_circle.png">
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="ICI" /> <!-- website name -->
	<meta property="og:site" content="https://itconsultant.biz.id/" /> <!-- website link -->
	<meta property="og:title" content="ICI - Generate QR Code"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="IT CONSULTANT INDONESIA" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="https://itconsultant.biz.id/images/t3b3313_yellow_circle.png" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://itconsultant.biz.id/" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <link href="css/style.css" rel="stylesheet">
    <link href="../vendor/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap-5.3.0/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


    <?php include "../config/config.php"; ?>
    
</head>

    <body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                <div id="header">
                    <nav class="navbar navbar-expand-lg bg-primary rounded-1" data-bs-theme="dark">
                        <div class="container-fluid">

                            <a class="navbar-brand fw-bold text-warning-emphasis" href="../../">
                                <!-- <i class="bi bi-unity"></i> ICI -->
                                <img class="logo-image" src="../../images/t3b3313_yellow_transparent.png" alt="tera.bytee" title="IT Consultant Indonesia">
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../../"><i class="bi bi-house"></i> Home</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?=$base_url?>"><i class="bi bi-qr-code-scan"></i> Generate QR Code</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=$base_url?>"><i class="bi bi-info-circle"></i> About Us</a>
                                    </li>
                                </ul>

                                <span class="navbar-text"> ICI Feature
                                
                                    <!-- <div class="spinner-grow text-warning" role="status" title="ICI Feature">
                                        <span class="visually-hidden">Loading...</span>
                                    </div> -->

                                </span>
                            </div>

                        </div>
                    </nav>
                </div>

                <div id="body" class="mt-3">
                    <div class="card rounded-1 text-bg-light border-warning">

                        <div class="card-header text-center fs-5 fw-bolder text-bg-warning">Generate QR Code</div>

                        <div class="card-body">
                            <fieldset>
                                <form method="post" action="" class="form-floating text-center">
                                    <!-- <div class="input-group flex-nowrap"> -->
                                        <?php
                                            
                                            if (isset($_POST['generate'])){
                                                include "plugin/phpqrcode/qrlib.php";
                                                // include "plugin/phpqrcode-1.1.4/qrlib.php";
                                                /*create folder*/
                                                $tempdir="img-qrcode/";
                                                if (!file_exists($tempdir))
                                                mkdir($tempdir, 0755);
                                                $file_name=date("Ymd").rand().".png";	
                                                $file_path = $tempdir.$file_name;
                                                    
                                                QRcode::png($_POST['teks_qr'], $file_path, "H", 10, 2);
                                                
                                                echo "<div class='col-md-12'>";
                                                echo "<input type='hidden' id='nameFile' name='name_file' required value='$file_name'><input type='hidden' name='file' required value='$file_path'>";
                                                // echo "<p>Code QR : <button type='submit' name='downloadBtn' class='btn btn-outline-info btn-sm'>Download</button></p>";

                                                // echo "<p>Code QR : <a href='download.php?file=$file_name' class='btn btn-outline-info btn-sm'>Download</a></p>";
                                                echo "<p>Code QR : <a onclick ='myLocation()' class='btn btn-outline-info btn-sm'>Download <i class='bi bi-download'></i></a></p>";
                                                
                                                echo "<p><figure class='figure'>";

                                        ?>

                                        <div id="box-qrcode">
                                            <div class="qrcode"></div>
                                            <div class="qrcode img-qr">
                                                <img class='figure-img img-fluid rounded' src='<?= $file_path ?>' alt="tera.bytee" style="cursor: pointer" />
                                            </div>
                                        </div>
                                        
                                        <?php
                                                echo "</figure></p>";
                                                echo "<p class='d-flex flex-column'><a href='' class='btn btn-secondary btn-block rounded-1'><i class='bi bi-arrow-left-short'></i> Back </a></p>";
                                                echo "</div>";

                                            } else {
                                        ?>

                                        <div class="row g-2">
                                            <div class="col-md-9">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" name="teks_qr" id="teks_qr" minlength="3" required placeholder="" value="<?php $val=isset($_POST['generate']) ? $_POST['teks_qr'] : ""; echo $val; ?>" >
                                                    <label class="text-body-tertiary" for="teks_qr">Input Example : https://example.com</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating d-flex flex-column">
                                                    <button type="submit" name="generate" class="btn btn-secondary btn-block mt-2 rounded-1">Create QR Code</button>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                            }
                                        ?>
                                    <!-- </div> -->
                                </form>
                            </fieldset>
                        </div>

                        <!-- <div class="card-footer text-body-secondary">
                            &nbsp;
                        </div> -->

                    </div>

                </div>

                <div id="footer" class="container fixed-bottom mt-4" style="font-size:11.5px;">
                <!-- <div id="footer" class="container fixed-bottom mt-4 fs-6"> -->

                    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
                        <div class="col-md-4 d-flex align-items-center mt-1 p-2">
                            <span class="mb-3 mb-md-0 text-body-secondary">
                                Copyright &copy;
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script>
                                <a class="link-warning mb-3 me-2 mb-md-0 text-decoration-none lh-1" href="https://itconsultant.biz.id/">ICI</a>. All rights reserved.
                            </span>
                        </div>

                        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex p-2">
                            <li class="ms-3">
                                <a class="text-body-secondary" href="https://twitter.com/Tera_Byte_" target="_blank">
                                    <i class="bi bi-twitter text-info"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-body-secondary" href="https://www.instagram.com/tera.bytee/" target="_blank">
                                    <i class="bi bi-instagram text-danger"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-body-secondary" href="https://www.facebook.com/Rock.Sla.N.ker.RolL" target="_blank">
                                    <i class="bi bi-facebook text-primary"></i>
                                </a>
                            </li>
                        </ul>
                    </footer>
                </div>

                
                
            </div>
        </div>
    </div>

    </body>
</html>

<script>
    function myLocation(){
        var file = document.getElementById("nameFile").value;
        // alert(file);
        location = "download.php?file=" + file;
    }
</script>
<script src="../vendor/bootstrap-5.3.0/js/bootstrap.min.js" ></script>