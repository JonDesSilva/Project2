<?php
//DB connection
//include 'connect.php';
$username = 'jed28';
$password = 'creepy76';
$hostname = 'sql2.njit.edu';

//Set dsn
$dsn = "mysql:host=$hostname;dbname=$username";
try {
//create pdo instance
    $pdo = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//Get user input
$email = $_GET['email'];
$password = $_GET['password'];
echo "Email: $email <br> Pass: $password <br>";
//get email
$query = "SELECT email FROM accounts WHERE email = :email;";
$statement = $pdo->prepare($query);
$statement->bindValue(':email', $email);
$statement->execute();
$fetched_email = $statement->fetchColumn();
$statement->closeCursor();
if ($statement->rowCount() == 0) {
	echo "Email is incorrect. <br>";
}

//Login code
$query = "SELECT password FROM accounts WHERE password = :password AND email = :email;";
$statement = $pdo->prepare($query);
$statement->bindValue(':password', $password);
$statement->bindValue(':email', $email);
$statement->execute();
$fetched_password = $statement->fetchColumn();
$statement->closeCursor();
if ($statement->rowCount() == 0) {
	echo "Password is incorrect. <br>";
}
echo "fetched email: $fetched_email <br>";
echo "fetched pw: $fetched_password <br>";
if (is_null($fetched_password)){
	echo "wrong password<br>";
}
else{
	$session_flag = 1;
}

//Get First Name
$query = "SELECT fname FROM accounts WHERE password = :password AND email = :email;";
$statement = $pdo->prepare($query);
$statement->bindValue(':password', $password);
$statement->bindValue(':email', $email);
$statement->execute();
$fname = $statement->fetchColumn();
$statement->closeCursor();
echo "First Name: $fname <br>";

//Get Last Name
$query = "SELECT lname FROM accounts WHERE password = :password AND email = :email;";
$statement = $pdo->prepare($query);
$statement->bindValue(':password', $password);
$statement->bindValue(':email', $email);
$statement->execute();
$lname = $statement->fetchColumn();
$statement->closeCursor();
echo "Last Name: $lname <br>";





?>