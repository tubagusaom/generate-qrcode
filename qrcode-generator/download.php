<?php

// $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
// $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// 

$dir="img-qrcode/";
$filename=$_GET['file'];
$file_ext = pathinfo($filename, PATHINFO_EXTENSION);
$file_path=$dir.$filename;
$ctype="application/octet-stream";

if(!empty($file_path) && file_exists($file_path)){ /*check keberadaan file*/
    header("Pragma:public");
    header("Expired:0");
    header("Cache-Control:must-revalidate");
    header("Content-Control:public");
    header("Content-Description: File Transfer");
    header("Content-Type: $ctype");
    // header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
    header('Content-Disposition: attachment; filename="qrcode_generate_by_ici.'.$file_ext.'"');
    header("Content-Transfer-Encoding:binary");
    header("Content-Length:".filesize($file_path));
    flush();
    readfile($file_path);
    exit();
}else{
    echo "The File does not exist.";
}

?>