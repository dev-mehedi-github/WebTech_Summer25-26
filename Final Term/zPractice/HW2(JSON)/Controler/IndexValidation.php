<?php
session_start();
$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";
$message ="";
$remember = false;

if(isset($_COOKIE["remember_user"]))
    {
        $name = $_COOKIE["remember_user"];
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $website = trim($_POST["website"] ?? "");
    $comment = trim($_POST["comment"] ?? "");
    $gender = trim($_POST["gender"] ?? "");
    $remember = isset($_POST["remember"]) && $_POST["remember"] =="1";
    }

    $valid = true;

    if (empty($name) || strlen($name)<5)
    {
        $message .= "Name must be valid (at least 5 characters).";
        $valid = false;
    }

    // if(empty($email)|| !filter_id_var($email, FILTER_VALIDATE_EMAIL)|| !str_end_with($email, "@gmail.com"))
    // {
    //     $message .= "Email must be valid and end with @gmail.com.";
    //     $valid = false;
    // }

    // if (!empty($website) && !str_start_with($website, "https://"))
    // {
    //     $message .= "Website must start with https://";
    //     $valid = false;
    // }

    // if (empty($gender))
    // {
    //     $message .= "Please select a gender.";
    //     $valid = false;
    // }

    if($valid)
        {
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $name;
            $message = "Welcome " . htmlspecialchars($name) . "!<br>Login successful! Session created.";

        if ($remember) {
            setcookie("remember_user", $name, time() + 60 * 60 * 24 * 7, "/");
        } else {
            setcookie("remember_user", "", time() - 3600, "/");
        }

        $jsonfile ="../Model/user.json";
        $users = [];
        if (file_exists($jsonfile))
            {
                $jsonData = file_get_contents($jsonfile);
                $users = json_decode($jsonData, true) ?? [];
                $users[] = [
                    'username' => $name,
                    'email' => $email,
                    'website' => $website,
                    'comment' => $comment,
                    'gender' => $gender,
                    'timestamp' => time()
                ];
                file_put_contents($jsonfile, json_encode($users, JSON_PRETTY_PRINT));
            }
        }
?>