

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hybrid Bot 1.0</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
</style>
    <script src="javascripts/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="src/spritespin.js" type="text/javascript"></script>
    
    <style>

#title{
	width:1920px;
	height:150px;
	position:fixed;
	z-index:-1;
	background-image:url("titlebar360.jpg");
	padding:0;
	opacity:0.80;
	}
	

#logo{
	width:200px;
	height:200px;
	margin-left:auto;
	margin-right:auto;
	background-image:url("logo360.jpg");
	padding:0;
	z-index:1;
	}
	
.test{
	width:100px;
	height:100px;
	float:left;
	position:fixed;
	background-image:url("logo2.jpg");
	padding:0;}
	
#navbar{
	width:843px;
	margin-top:150px;
	float:left;
	position:fixed;
	padding:0;
	z-index:1;}
	



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00cccc;
	margin-left:auto;
	margin-right:auto;
}

li {
    float: left;
	font-family:'Open Sans';
	font-weight:bold;
	color:#000;
	
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

#left
{width:900px;
height:875px;
float:left;
position:relative;
z-index:-2;
border-radius: 5px;
    border: 2px solid #404040;
	padding:10px;
	margin-top:20px;
	box-shadow: 10px 10px 5px #888888;
	font-family:'Open Sans';
}


#abc123
{
height:432px;
width:700px;
margin-left:auto;
margin-right:auto;
margin-top:0px;
background-image:url("loading.jpg");
z-index:-2;
position: relative;

}

	
#right
{
	width:800px;
	height:1000px;
	float:right;
	margin-top:20px;
	margin-right:20px;
	z-index:-2;
	position: relative;
	border-radius: 5px;
    border: 2px groove #404040;
	padding:10px;
	margin-top:20px;
	box-shadow: 10px 10px 5px #888888;
	font-family:'Open Sans';
	
}
#lefttop{
	width:550px;
	margin-left:auto;
	margin-right:auto;
}
#leftbot{
	width:600px;
	height:200px;
	margin-left:150px;
	
	
	position:absolute;
	bottom:0;
}

#con{
	min-height:100%;
	position:relative;
}
#righttop{
	width:700px;
	height:400px;
	margin-left:auto;
	margin-right:auto;
	}
#rightbot{
	width:700px;
	height:400px;
	position:absolute;
	bottom:5;
	margin-left:50px;
	
	}
	
.input{
  font-family:'Open Sans'; 
}

</style>

    <style type="text/css">
      .spritespin-preload {
        background : url('file:///C|/Users/N/Desktop/giniedp-spritespin-19724e0/examples/stylesheets/images/ajax-loader.gif') no-repeat 50% 50%;
      }
      .spritespin-instance {
        border: 1px dashed;
        margin: 20px;
      }
    </style>
</head>


<body>
<div id= "title"></div>
<div id="navbar">
<ul >
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="aboutus.html">About us</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Products</a>
    <div class="dropdown-content">
      <a href="360.php">Product 1</a>
      <a href="#">Future 1</a>
      <a href="#">Future 2</a>
    </div>
  </li>
</ul>
</div>

<div id="logo"></div>
<div id="con">
<div id="con1">
<div id="left">

<div id="lefttop"><h1 id="first">Hybrid bot 1.0 </h1></div>
<div id="abc123"></div>
<div id="leftbot">
<h2>Price: Rs.1999/-</h2>
</div>

</div>

<div id="right">
<div id="righttop">

<h1>Description: </h1>
<P> 1. Robot capable of light sensing, obstacle avoidance and cliff detection.</P>
<br><p> 2. Detects edges in low light. </p>
<br><p> 3. Avoids obstacles in sufficient light. </p>
</div>
<div id="rightbot">
<h1>Query: </h1>
<?php 
if(isset($_POST['submit'])){
    $to = "aakash.raj5@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<form action="" method="post">
<br>
First Name: <input type="text" name="first_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>
Email:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"><br><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>

</div>
</div>

</div>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("logo").className = "test";
		$('#navbar').fadeOut();
    } else {
        document.getElementById("logo").className = "";
		$('#navbar').fadeIn();
    }
}
</script>

 <script type="text/javascript">
    $(function(){
      var frames = [
          "images/000.jpg",
          "images/010.jpg",
          "images/020.jpg",
          "images/030.jpg",
          "images/040.jpg",
          "images/050.jpg",
          "images/060.jpg",
          "images/070.jpg",
          "images/080.jpg",
          "images/090.jpg",
          "images/0100.jpg",
          "images/0110.jpg",
          "images/0120.jpg",
          "images/0130.jpg",
          "images/0140.jpg",
          "images/0150.jpg",
          "images/0160.jpg",
          "images/0170.jpg",
          "images/0180.jpg",
          "images/0190.jpg",
          "images/0200.jpg",
          "images/0210.jpg",
          "images/0230.jpg",
          "images/0240.jpg",
          "images/0250.jpg",
          "images/0260.jpg",
          "images/0270.jpg",
          "images/0280.jpg",
          "images/0290.jpg",
          "images/0300.jpg",
          "images/0310.jpg",
          "images/0320.jpg",
          "images/0330.jpg",
          "images/0340.jpg",
		  "images/0350.jpg",
		  "images/0360.jpg"
        ];

      $("#abc123").spritespin({
        width     : 600,
        height    : 432,
        frames    : frames.length,
        behavior  : "drag", // "hold"
        module    : "360",
        sense     : -1,
        source    : frames,
        animate   : true,
        loop      : true,
        frameWrap : true,
        frameStep : 1,
        frameTime : 1000,
        enableCanvas : true
      });
      
     
    });
    </script>

</body>

</html>