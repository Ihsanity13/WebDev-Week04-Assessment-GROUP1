<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$year = $_POST['year'];

if (empty($name) || empty($email) || empty($year)) {

    echo "<h2>Please fill in all required fields.</h2>";
    echo "<a href='index.html'>Go Back</a>";

} else {

    $_SESSION['name'] = $name;

    $student = [
        "Name" => $name,
        "Email" => $email,
        "Year Level" => $year
    ];

    echo "<h1>Form Submitted Successfully!</h1>";

    echo "<h2>Student Information</h2>";

    foreach ($student as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    echo "<br>";
    echo "<a href='session.php'>Go to Second Page</a>";
}

?>