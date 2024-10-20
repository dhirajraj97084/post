<!-- PHP Script (submit.php) -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Your Name is submitted successfully: ". $name;
}
?>