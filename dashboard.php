<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Welcome " . $_SESSION['username'];
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<h1>Welcome Guest</h1>';
        echo '<a href="/php-crash/13_sessions.php"?>Home</a>';
    }



?>