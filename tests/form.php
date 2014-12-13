<?php

require 'BlockCSRF.php';

use Block\BlockCSRF;

if(isset($_POST['token'])){
	$token = $_POST['token'];
}else{
	$token = 0;
}

$blockCSRF = BlockCSRF::instance();
$noCSRF = $blockCSRF->check($token);

var_dump($noCSRF);

if($noCSRF){
	echo 'success';
}else{
	echo 'fail';
}
