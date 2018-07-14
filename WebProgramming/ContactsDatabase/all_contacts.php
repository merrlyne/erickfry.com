<html>
<head>
<title>All Contacts</title>
<link rel="stylesheet" type="text/css" href="/homestyle.css">
<body>
<nav id="main_nav">
			<ul>
				<li>
					<a href="./">Home</a>
				</li>
				<li>
					<a href="#">Movies Database</a>
					<ul>
						<li><a href="./all_movies.php">All Movies</a></li>
						<li><a href="./insert_form.html">Add Movie</a></li>
					</ul>
				</li>
				<li class="active">
					<a href="#">Contacts Database</a>
					<ul>
						<li><a href="./all_contacts.php">All Contacts</a></li>
						<li><a href="./insert_contact.html">Add Contact</a></li>
					</ul>
				</li>
				<li>
					<a href="">About Me</a>
					<ul>
						<li><a href="#">R&eacute;sum&eacute;</a></li>
						<li><a href="https://www.linkedin.com/in/erickfry" target="_blank">LinkedIn</a></li>
						<li><a href="#">GitHub</a></li>
						<li><a href="#">Personal Projects</a></li>
					</ul>
				</li>
			</ul>
		</nav>
<div class="content">
<?

@ $db = mysql_pconnect("localhost","hydropha","Quaffle2032");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("hydropha_contacts");

$query = "SELECT * FROM People AS p INNER JOIN Location AS l where l.PhoneNumber = p.PhoneNumber";

$result = mysql_query($query);
$num_results = mysql_num_rows($result);

echo "<h3>Number of contacts found: ".$num_results."</h3>";

for ($i=0; $i < $num_results; $i++)
{
$row = mysql_fetch_array($result);
echo "<p>";
echo "Phone Number: "; echo htmlspecialchars( stripslashes($row["PhoneNumber"])); echo "<br />";
echo "First Name: "; echo htmlspecialchars( stripslashes($row["FirstName"])); echo "<br />";
echo "Last Name: "; echo htmlspecialchars( stripslashes($row["LastName"])); echo "<br />";
echo "Location: "; echo htmlspecialchars(stripslashes($row["City"])); echo ", "; echo htmlspecialchars(stripslashes($row["State"])); echo "</p>";

}  

?>
</div>
<footer>
		<ul>
			<li>&copy;<script type="text/javascript">document.write(new Date().getFullYear());</script></li>
			<li>Eric K Fry</li>
			<li><address>Plano, TX 75075</address></li>
			
		<!--<ul>
			<li>Movies Database
				<ul>
					<li><a href="all_movies.php">All Movies</a></li>
					<li><a href="insert_form.html">Add Movie</a></li>
				</ul>
			</li>
			<li>Contacts Database
				<ul>
					<li><a href="all_contacts.php">All Contacts</a></li>
					<li><a href="insert_contact.html">Add Contact</a></li>
				</ul>
			</li>
		</ul>-->
	</footer>
</body>
</html>