<?php
$page_title = 'Contact me';
include('includes/header.html');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

h3{
  font-family: 'Brush Script MT', cursive;
  font-size: 50px;
}
h5{
  font-family: 'Brush Script MT', cursive;
  font-size: 30px;
}
</style>
</head>
<body>

<h3>Contact me!</h3>

<div class="container">
<form method = "post" action = "Contact.php">
<input type = "hidden" name = "recipient" value = "parraolk">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Enter your message here:" style="height:200px" required></textarea>

    <input type="submit" value="Submit">
    <br>
    <br>
    <h5> feel free to contact my other forms of contact: </h5>
    <div class="container-fluid">
	<div class="row text-left">
		<div class="col-md">
            <a href="https://www.linkedin.com/in/kevin-parra-5823401b8/">
                <img border="0" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-linkedin-circle-512.png" height="40">
                <a href="mailto:parraolk@kean.edu">
             <img border="0" src="Photos/iconfinder_logo_brand_brands_logos_gmail_2993691.svg" height="40">
            </a> 
</a>
  </form>
</div>

</body>
</html>

<?php
 include('includes/footer.html');
?>

