<?php
/*
* PHP ile Mac Adres Alma
* Sadece localhost üzerinde çalışır.
* E-CLOUD IT. SEC.
* www.e-cloud.web.tr
*/

ob_start();  
system('ipconfig /all'); 
$mycom=ob_get_contents(); 
ob_clean(); 

$findme = "Physical";
$pmac = strpos($mycom, $findme); 
$mac=substr($mycom,($pmac+36),17); 

echo "<strong>Mac Adresiniz: </strong> <code>$mac</code>";
?>
