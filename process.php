<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);

    if (empty($fname) || empty($lname) || empty($email) || empty($mobile)) {
        echo "Fill all required fields";
    } else {
        echo "Registration Successful<br>";
        echo "Name: $fname $lname<br>";
        echo "Email: $email<br>";
        echo "Mobile No.: $mobile<br>";
    }
}
?>
