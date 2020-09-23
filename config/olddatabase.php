


<?php
 $url = getenv('mysql://iyxg6whzentos83o:omy5fuavklvzg60m@sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ngcpbqfxngcgaoqj');
$dbparts = parse_url($url);

$hostname = $dbparts['sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['iyxg6whzentos83o'];
$password = $dbparts['omy5fuavklvzg60m'];
$database = ltrim($dbparts['ngcpbqfxngcgaoqj'],'/');


   
   
