<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fc;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 35px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #1d4ed8;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
        }

        p {
            color: #666;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #1d4ed8;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Second Page</h1>

        <p>The session successfully remembered your name:</p>

        <div class="name">
            <?php echo $_SESSION['name']; ?>
        </div>

        <p>This value was retrieved from the PHP session.</p>

        <a href="index.html">Back to Form</a>

    </div>

</body>
</html>
```
