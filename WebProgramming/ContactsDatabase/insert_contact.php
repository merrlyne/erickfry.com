<html>
<head>
<title>Insert Movies Results</title>
<body>

<?



// get the data from the form and assign the data to variables

$phone = $_POST['PhoneNumber'];
$first = $_POST['FirstName'];
$last = $_POST['LastName'];
$city = $_POST['City'];
$state = $_POST['State'];



// check to see if all the data is there

if (!$phone
 || !$first
 || !$last
 || !$city
 || !$state)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$title = addslashes($phone);
$directorfn = addslashes($first);
$directorln = addslashes($last);
$year = intval($city);
$genre = addslashes($state);

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

$query = "insert into People values
	('".$phone."','".$first."','".$last."')";



// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Contact added to Database.<br>";


$query = "insert into Location values
	('".$phone."','".$city."','".$last."')";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." Location added to Database.<br>";


?>

</body>
</html>


