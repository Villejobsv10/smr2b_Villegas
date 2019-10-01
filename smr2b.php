<a href="http://192.168.0.105/smr2b_cesar/smr2b.php">cesar</a>
VILLEHASH
<a href="http://192.168.0.108/smr2b_jesuscrespo/smr2b.php">Jesus</a>

<?php

$f=fopen('visitas.txt' , 'a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite ($f,$_SERVER['REMOTE_ADDR']);
fwrite ($f, "\r\n");
fclose($f);

?>
