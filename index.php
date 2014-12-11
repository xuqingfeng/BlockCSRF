<?php
require_once 'BlockCSRF.php';

use Block\CSRF\BlockCSRF;

$blockCSRF = BlockCSRF::instance();
$token = $blockCSRF->generate();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>


<div>
	<form action="form.php" method="post">
		<input type="hidden" name="token" value="<?php echo $token; ?>" />
		<label>Name:</label>
		<input type="text" name="name" placeholder="enter your name here" />
		<br/>
		<label>Password:</label>
		<input type="password" name="password" />
		<br/>
		<button type="submit">post</button>
	</form>
</div>
</body>
</html>
