<?php
//1. Content-Type
header("Content-Type: text/html");
//2. Location
header("Location: /");
//3. Response Status
header("HTTP/1.0 404 Not Found");
//4. Content Disposition
header("Content-Disposition: attachment; filename=1.pdf");
//5. Content Length
header("Content-Length: 100");
//6. Content Description
header("Content-Description: File transfer");

//SHOW PDF FILE
header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=1.pdf");
header("Content-Length: " . filesize("1.pdf"));
@readfile("1.pdf");

//FORCE DOWNLOAD
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=1.pdf");
header("Content-Length: " . filesize("1.pdf"));
@readfile("1.pdf");