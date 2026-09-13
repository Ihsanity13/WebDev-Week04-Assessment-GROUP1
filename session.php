<?php

session_start();

echo "<h1>Second Page</h1>";

echo "<p>Hello, " . $_SESSION['name'] . "!</p>";

echo "<p>Your name was saved using a PHP session.</p>";

?>