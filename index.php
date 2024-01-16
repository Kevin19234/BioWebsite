<?php 
$page_title = 'Home';
include('includes/header.html');
?>
 
<div class="page-header"><h1>Welcome!</h1></div>
<style>
    h1{
        font-family: 'Brush Script MT', cursive;
        font-size: 50px;
    }
    </style>

<p> Hello my name Kevin Parra Welcome to my homepage, Here you will learn a little bit about me what my interests are, where I come from, and where I want to be in the future. </p>
    
    <p>Thank you for taking the time to be here and explore my small website, Although I have done work like this in the past I would like to try to implement new things on this one. again thank you for taking the time.  </p>
    
<p> Hope you Enjoy!</p>
<br>
<button type="button" class="btn btn-primary"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
<?php
include('includes/footer.html');
?>