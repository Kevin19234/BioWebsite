<?php
$page_title = 'About me';
include('includes/header.html');
?>
<html>
    <head>
        <title>
            About me
</title>
<h2> About Kevin Parra</h2>
</head>

<style>
    div{
        text-align: center;
    }
    h2{text-align: center;
    font-family: 'Brush Script MT', cursive;
    font-size: 50px;
    }
    img{
        box-shadow:10px 10px 15px grey;
        height:400px;
        width:400px;
    }
    h1{
        font-family: 'Brush Script MT',cursive;
    }
    ul {
        text-align: center;
    }
    * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    <div>
    <img src="Photos/Kevin.jpeg" alt="Kevin" ;>
    <body>
    <h1>
        My Backround:
</h1>
<br>
<p> Hello my name is Kevin parra, im 21 years old and currently attending Kean University as a transfer undergraduate student.
     My major at Kean Is computer science,  
    Before I transfered into Kean University I attended and graduated from Raritan Valley Community College last year in May of 2020 with an associates degree 
    in Information System & Technology. I live in a small town called North Plainfield and in the year of 2017, I graduated from the North Plainfield 
    High School. Ever scince I was in high school I always had an intruige for technology, I started out downloading music to learning to build a computer. 
    I always had a thing against technology not doing what I wanted it to do so if I learned how to program the technology then the technology would do 
    exactly as I say, thats where I found my passion for technology.
    <br>
    <br>
    <h1>
        My hobbies include:
</h1>
<ul>
    <li> Listen to music</li>
    <li> Driving </li>
    <li> Play video games</li>
    <li> Go outside </li>
</ul>
<br>
<br>
<h1> My Personal Belongings:</h1>
<br>
<br>
<P> Here are a few things of mine that I either love to see or use the first photo is of my car. 
  My car since I bought it means alot to me and its my go to. The second photo is of my Playstation 5 and playstation 4, 
  both consoles mean a lot to me but the newest one is the white playstation 5 and its the one I currently use the most. 
  The last photo is of my dog, his name is Sunday and is a mixed retriever.
  <br>
  <br>
<div class="row">
  <div class="column">
    <img src="Photos/Car.jpeg" alt="Car" style="width:100%">
  </div>
  <div class="column">
    <img src="Photos/PS5.jpeg" alt="Playstation" style="width:100%">
  </div>
  <div class="column">
    <img src="Photos/Sunday.jpeg" alt="Sunday" style="width:100%">
  </div>
</div>
</div>
</body>
</html>
<?php
    include('includes/footer.html');
?>