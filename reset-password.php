<?php

use Phppot\Member;
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Password must have atleast 6 characters.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty($new_password_err) && empty($confirm_password_err)) {
        if (!empty($_POST["reset-btn"])) {
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);

            require_once __DIR__ . '/Model/Member.php';
            $member = new Member();
            $result3 = $member->updatepass($param_password);
            session_destroy();
            header("location: login.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font: 14px sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .wrapper {
            border: 5px solid black;
            width: 360px;
            padding: 20px;
        }
        .btn{
            background-color: #f7c027;
            border: 10%;
        }
        .btn2{
            background-color:#ee0000;
            padding:04%;
            text-decoration: none;
            color: #eaeaea;
            margin-left: 40%;
            border-radius: 12%;
        }
       

    </style>
</head>

<body>

    <div class="wrapper">

        <h2>Reset Password</h2>

        <form action="" method="POST">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input class="btn" type="submit" name="reset-btn" id="login-btn" value="reset">
                <a class="btn2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>

</body>

</html>