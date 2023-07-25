<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ICI - Generate QR Code</title>
    <meta name="description" content="Generate QR Code By ICI" />
    <meta name="keywords" content="generate, qr, Generate QR, qrcode, barcode" />

    <!-- Favicon  -->
    <link rel="shortcut icon" href="images/generate_qr.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/generate_qr.png">
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="ICI" /> <!-- website name -->
	<meta property="og:site" content="https://itconsultant.biz.id/" /> <!-- website link -->
	<meta property="og:title" content="IT CONSULTANT INDONESIA"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="IT CONSULTANT INDONESIA" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="https://itconsultant.biz.id/images/t3b3313_transparent.png" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://itconsultant.biz.id/" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
</head>

<body> 

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">

                    <div class="card-header text-center">
                        <b>Generate QR Code</b>
                    </div>

                    <div class="card-body">
                        <fieldset>
                            <form method="post" action="" class="text-center">
                                <div class="input-group">
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
                                            echo "<p>Code QR : <a onclick ='myLocation()' class='btn btn-outline-info btn-sm'>Download</a></p>";
                                            
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
                                            echo "<p><a href='' class='btn btn-secondary btn-block'>Back </a></p>";
                                            echo "</div>";

                                        } else {
                                    ?>
                                    
                                    <div class="form-group row col-md-12">
                                        <div class="col-md-9 mb-2">
                                            <input type="text" class="form-control" name="teks_qr" id="teks_qr" minlength="3" required placeholder="Example : https://itconsultant.biz.id" value="<?php $val=isset($_POST['generate']) ? $_POST['teks_qr'] : ""; echo $val; ?>" >
                                        </div>

                                        <div class="col-md-3 mb-2">
                                            <button type="submit" name="generate" class="btn btn-primary btn-block">Create QR Code</button>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    ?>
                                </div>
                            </form>
                        </fieldset>
                    </div>

                </div>

                <div class="card-footer text-center" style="font-size:11.5px;">
                    Copyright ©
                    <script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                    </script>
                    <a href="https://itconsultant.biz.id/">ICI</a>. All rights reserved.
                </div>

            </div>
        </div>
    </div>

    <script>
        function myLocation(){

            var file = document.getElementById("nameFile").value;

            // alert(file);

            location = "download.php?file=" + file;
        }
    </script>

</body>

</html>