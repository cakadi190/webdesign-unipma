<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-type: application/json');

if(empty($_GET)) :
    echo file_get_contents('https://api.kawalcorona.com/indonesia/');
else :
    if($_GET['type'] === 'global') : 
        echo file_get_contents('https://api.kawalcorona.com/');
    elseif($_GET['type'] === 'provinsi') : 
        echo file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
    endif;
endif;