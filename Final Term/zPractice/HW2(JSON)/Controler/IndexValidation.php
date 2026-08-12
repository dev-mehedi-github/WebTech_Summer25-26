<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $website = trim($_POST["website"] ?? "");
    $comment = trim($_POST["comment"] ?? "");
    $gender = trim($_POST["gender"] ?? "");
}
?>