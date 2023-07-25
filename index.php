<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="ICI" /> <!-- website name -->
	<meta property="og:site" content="https://itconsultant.biz.id/" /> <!-- website link -->
	<meta property="og:title" content="IT CONSULTANT INDONESIA"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="IT CONSULTANT INDONESIA" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="https://it-konsultan.com/images/t3b3313_transparent.png" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://itconsultant.biz.id/" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Favicon  -->
    <link rel="icon" href="images/maintenance.png">
    
</head>

<body>

    <div class="container">
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
                                            /*create folder*/
                                            $tempdir="img-qrcode/";
                                            if (!file_exists($tempdir))
                                            mkdir($tempdir, 0755);
                                            $file_name=date("Ymd").rand().".png";	
                                            $file_path = $tempdir.$file_name;
                                                
                                            QRcode::png($_POST['teks_qr'], $file_path, "H", 10, 2);
                                            
                                            echo "<div class='col-md-12'>";
                                            echo "<p>Code QR : <a href='".$file_path."' target='_blank' class='btn btn-outline-info btn-sm'>Download</a></p>";
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
                                        }else {
                                    ?>
                                    
                                    <!-- <div class="col-md-12">
                                        <input type="text" class="form-control" name="teks_qr" id="teks_qr" minlength="3" required value="<?php $val=isset($_POST['generate']) ? $_POST['teks_qr'] : ""; echo $val; ?>">
                                        <button type="submit" name="generate" class="btn btn-primary ml-3 btn-sm">Generate</button>
                                    </div> -->
                                    
                                    <div class="form-group row col-md-12">
                                        <div class="col-md-9 mb-2">
                                            <input type="text" class="form-control" name="teks_qr" id="teks_qr" minlength="3" required placeholder="Input link" value="<?php $val=isset($_POST['generate']) ? $_POST['teks_qr'] : ""; echo $val; ?>" >
                                        </div>

                                        <div class="col-md-3 mb-2">
                                            <button type="submit" name="generate" class="btn btn-primary btn-block">Generate</button>
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

                <!-- <div class="card-footer text-center">

                </div> -->
            </div>
        </div>
    </div>

    <!-- <div class="container center">
        <div class="card">
            <div class="card-body">

                <p class="card-title text-center"><b>Generate QR Code</b></p>

                <fieldset>
                    <form method="post" action="" class="text-center">
                        <div class="input-group mb-3">
                        
                        <?php
                        if (isset($_POST['generate'])){
                            include "plugin/phpqrcode/qrlib.php"; 
                            /*create folder*/
                            $tempdir="img-qrcode/";
                            if (!file_exists($tempdir))
                            mkdir($tempdir, 0755);
                            $file_name=date("Ymd").rand().".png";	
                            $file_path = $tempdir.$file_name;
                            
                            QRcode::png($_POST['teks_qr'], $file_path, "H", 10, 2);
                            
                            echo "<p>QR Code :</p>";
                            echo "<p><img src='".$file_path."' /></p>";
                            echo "<p> <a href=''>Back </a></p>";
                        }else {
                        ?>
                        
                        <input type="text" name="teks_qr" id="teks_qr" minlength="3" required value="<?php $val=isset($_POST['generate']) ? $_POST['teks_qr'] : ""; echo $val; ?>">
                            <button type="submit" name="generate" class="btn btn-primary ml-3">Generate</button>
                        </div>

                        <?php
                            }
                        ?>
                    </form>
                </fieldset>
            </div>
        </div>
    </div> -->
</body>

</html>