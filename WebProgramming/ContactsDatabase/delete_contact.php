<html>
<head>
<title>Delete Contact Results</title><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="../../js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="../../css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="../../css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="../../css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<div id="header">
  <div class="top"> 
    
    <!-- Logo -->
    <div id="logo"> <span class="image avatar48"><img src="../../images/avatar.jpg" alt="" /></span>
      <h1 id="title">Eric K Fry</h1>
      <p>C++ Developer</p>
    </div>
    
    <!-- Nav -->
    <nav id="nav">
      <ul>
        <li><a href="../../index.html#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
        <li><a href="../../index.html#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
        <li><a href="../../index.html#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
      </ul>
    </nav>
  </div>
  <div class="bottom"> 
    
    <!-- Social Icons -->
    <ul class="icons">
      <li><a href="https://twitter.com/ekf_07" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
      <li><a href="https://www.facebook.com/ekf07" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
      <li><a href="https://www.linkedin.com/in/erickfry" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
      <li><a href="https://github.com/merrlyne" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
      <li><a href="mailto:erick.fry7@me.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
    </ul>
  </div>
</div>

<!-- Contact -->
  
<!-- Main -->
<div id="main">
<section id="contact" class="four">
    <div class="container">
      <header>
        <h2>Contact Deleted</h2>
      </header>
      <p>This is the PHP page that receives the info from the submitted form. The results state if the contact was added. </p>
<?



// get the data from the form and assign the data to variables

$phone = $_POST['PhoneNumber'];



// check to see if all the data is there

if (!$phone)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$title = addslashes($phone);

// connect to the db

@ $db = mysql_pconnect("localhost","hydropha","Quaffle2032");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("hydropha_contacts");


// prepare the query

$query = "DELETE FROM `People` WHERE `PhoneNumber` = 
	('".$phone."')";



// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Contact removed from Database.<br>";


$query = "DELETE FROM `Location` WHERE `PhoneNumber` = 
	('".$phone."')";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Location removed from Database.<br>";


?>
</section>
</div>
<!-- Footer -->
<div id="footer"> 
  
  <!-- Copyright -->
  <ul class="copyright">
    <li>&copy; 
      <script type="text/javascript">
                    document.write(new Date().getFullYear());

                </script>. All rights reserved.</li>
    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
  </ul>
</div>

<!-- Scripts --> 
<script src="../../js/jquery.min.js"></script> 
<script src="../../js/jquery.scrolly.min.js"></script> 
<script src="../../js/jquery.scrollzer.min.js"></script> 
<script src="../../js/skel.min.js"></script> 
<script src="../../js/util.js"></script> 
<!--[if lte IE 8]><script src="../../js/ie/respond.min.js"></script><![endif]--> 
<script src="../../js/main.js"></script>
</body>
</html>