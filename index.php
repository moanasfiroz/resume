<!DOCTYPE html>
<html lang="en">
<head>
  



  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="script.js"></script>
 
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

    <nav>
     <p class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></p>
        <ul class="nav-list">
            <li>
                <a href="index.html"><i class="fa fa-1x fa fa-home" aria-hidden="true"></i>   Home</a>
<hr>
            </li>
            <li>
                <a href="responsvie.html"><i class="fa fa-user-circle" aria-hidden="true"></i>   About Me</a>
<hr>
            </li>
            <li>
                <a href="#skill"><i class="fa fa-smile-o" aria-hidden="true"></i>  Skill</a>
<hr>
            </li>
            <li>
                <a href="#us">Contact  <i class="fa fa-phone" aria-hidden="true"></i></a>
<hr>
            </li>
            <li>
                <a href="#">
                    <img src="IMG.jpg" alt="avatar" width="40px" height="40px" style="border-radius:30px;">
                </a>
            </li>
        </ul>
    </nav>
<div class="log">Anas Firoz</div>
<!-- <div class="lon"><button class=""><a href="resume.html" download="resume">download</a></button></div> -->
    <div class="part1">
        <a href="index.html"><i class="fa fa-1x fa fa-home" aria-hidden="true"></i>Home</a>
        <a href="responsvie.html"><i class="fa fa-user-circle" aria-hidden="true"></i>About Me</a>
        <a href="#skill"><i class="fa fa-smile-o" aria-hidden="true"></i>Skill</a>
        <a href="#us"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
    </div>
    <div class="part">

        <h1 style="width: auto;">I Am<br><u>Anas Firoz.......</u></h1>
       
        <p>Hey there Nice to Meet you.</p>
         <div id="ii">
        <span><button onclick="document.location='project.html'">Projects</button></span>
        <button onclick="document.location='contect.html'"><i class="fa fa-id-badge" aria-hidden="true"></i>Hire Me</button></div>
        <img src="IMG.jpg" width="50%" height="auto" style="margin-left: 90px;">

       </div>
       <div  id="skill"class="part2">
           <h1 style="width:auto;">I Know These Languages And frameworks </h1><br><br><br><br><br><br>
          <center> <abbr title="hypertext markup language"><img src="html.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Hypertext markup Languge</h2><br><br><br><br><br><br>
            
            <abbr title="Cascading style sheet"><img src="css.png" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Cascading style sheet</h2><br><br><br><br><br><br>
            
            <abbr title="Java Script"><img src="js.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">JavaScript</h2><br><br><br><br><br><br>
            <abbr title="BootStrap"><img src="bootstrap.png" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Bootstrap</h2><br><br><br><br><br><br>
            <abbr title="React Js"><img src="react.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">React Js</h2><br><br><br><br><br><br>
            <abbr title="github"><img src="github.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Github</h2><br><br><br><br><br><br>
            <abbr title="python"><img src="python.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Python</h2><br><br><br><br><br><br>
              <abbr title="python"><img src="mysql.jpg" width="300" height="300"></abbr>
              <h2 style="color: white;" id="gon">Mysql</h2><br><br><br><br><br><br>
        
        
        
        
        
        
        </center>
       </div>
       <div class="part3">
<ul>
                <li>
                <h1>What do you need to know to become a web developer?</h1>
                

                    Becoming a web developer is a good strategy for people who are tech savvy,<br> but it will take some work and learning.<br> If you are looking to build a career as a web developer,<br> you will need to learn a set of skills involving programming languages,<br> graphic editing, and marketing. Part 1 Understanding<br> What is Required to Become a Web Developer</li>
            </ul>
       </nav>
</div><br><br>
<div class="part4">
<ul>
<li><h1>How can I become a good Web developer?</h1>
Image result for how to become good web developer points
How to become a Web Developer in five steps:
Learn web development fundamentals.
Choose a development specialization.
Learn key programming languages for web development.
Work on projects to develop your Web Developer skills.
Build a web development portfolio.</li>
</ul>
</div>



<div class="container" id="us">
  <div class="part7"><h1>Send Me Message</h1></div>
  
    

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="text" id="email" 0 placeholder="Your Email..">


    <label for="fname">City</label>
    <input type="text" id="city" name="firstname" placeholder="Your City..">

    <label for="subject">Message</label>
    <textarea id="message" name="subject" placeholder="Write something.." style="height:200px"></textarea>

   

   
                        <center><div id="main" style="font-size: 25px;"></div></center>
    <div id="error"></div>

    <input type="button" class="btn-primary" style="width: 200px;" value="Submit" onclick="validation()">
</div>


<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60256.1873728808!2d73.02645252848906!3d19.281856931815636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bd101e824aa3%3A0x5970a572c6d931ae!2sBhiwandi%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1639558047676!5m2!1sen!2sin" width="100%" height="800px"  style="border:10; margin-top: 150px;" allowfullscreen="" loading="lazy"></iframe>



 

 
 <script src="val.js"></script>
  
</body>
</html>
