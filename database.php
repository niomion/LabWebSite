<?php 
$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["firstname"]);
    $email = test_input($_POST["email"]);
    $mysqli = new mysqli("localhost", "root", "" ,"labwebsite");
    $sql = "INSERT INTO info (UserName, UserEmail) VALUES ('$name', '$email')";
    
    if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
$mysqli->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
    $nameErr = "Name is required";
    } else { 
        $name = test_input($_POST["firstname"]);
    } 
   
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    $mysqli = new mysqli("localhost", "root", "" ,"labwebsite");

    $sql = "INSERT INTO info (UserName, UserEmail) VALUES ('$name', '$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

  $sql = "SELECT * FROM info";
  $result = $mysqli->query($sql);
  if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["UserName"] . ", Email: " . $row["UserEmail"] . "<br>";
    }
    $result->free();
} else {
    echo "Помилка виконання запиту: " . $mysqli->error;
}

$mysqli->close();
} */

?>