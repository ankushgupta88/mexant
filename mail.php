<!DOCTYPE html>
<html>
<?php
    $email=$_POST["email"];
    $subject = $_POST["subject"];
	$option = $_POST["Category"];
    $message = $_POST["name"];
    //mail("email@gmail.com", $subject, $message);
	echo "Email successfully sent.";
    //header("Location: index.html");
?>

email: <?php echo $email ?> <br>
subject: <?php echo $subject ?> <br>
message: <?php echo $message ?> <br>
</html>