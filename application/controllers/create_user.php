<?php
$pengacak = "!pjmpjatbrhmunfks014579*prvcycoatke$";
$password = "PliBCPapin";	
$hash = md5($pengacak.md5($password).$pengacak);

echo $hash;

?>