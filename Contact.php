<?php
$page_title = 'Contact me';
include('includes/header.html');
?>
<h1> Message Recieved! </h1>

<?php
echo "The form was received by: " . $_POST['recipient'] . "</br>";
echo "The First name entered is : " . $_POST['fname']. "</br>";
echo "The Last name entered is : " . $_POST['lname']. "</br>";
echo "My Message to reciever is : " . $_POST['subject']. "</br>";
?>


<?php
 include('includes/footer.html');
?>