<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$year = $_POST['year'];

if (empty($name) || empty($email) || empty($year)) {

    echo "
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fc;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #dc2626;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #1d4ed8;
            text-decoration: none;
        }
    </style>

    <div class='container'>
        <h1>Missing Information</h1>
        <p>Please fill in all required fields.</p>
        <a href='index.html'>Go Back</a>
    </div>
    ";

} else {

    $_SESSION['name'] = $name;

    $student = [
        "Name" => $name,
        "Email" => $email,
        "Year Level" => $year
    ];

    echo "
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fc;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #1d4ed8;
        }

        h2 {
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .info {
            background-color: #f2f6fc;
            padding: 15px;
            border-radius: 6px;
            line-height: 1.8;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

    <div class='container'>

        <h1>Form Submitted!</h1>

        <h2>Student Information</h2>

        <div class='info'>
    ";

    foreach ($student as $key => $value) {
        echo "<strong>" . $key . ":</strong> " . $value . "<br>";
    }

    echo "
        </div>

        <a href='session.php'>Go to Second Page</a>

    </div>
    ";
}

?>
```
