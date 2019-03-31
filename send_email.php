<?php
$alert;
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
} else {
    die("Data wasn’t sent to the page.");
}
if (($name=="")||($email=="")||($message=="")) {
    $alert = "All fields are required, please fill <a href=\"contact.html\">the email form</a> again.";
}
else {
    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Message sent using your contact form";
    mail("gwhagenah@gmail.com", $subject, $message, $from);
    $alert = "Email sent!";
}
?>

<!-- Start of header-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <title>Graham Hagenah</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar is-white" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a href="index.html">
              <figure class="image is-64x64">
                <img class="is-rounded" src="images/Graham.jpg">
              </figure></a>
          </div>
          <div class="navbar-end">
              <a class="navbar-item current" href="index.html">
                  <h1>Home</h1></a>
              <a class="navbar-item" href="projects.html">
              <h1>Projects</h1></a>
              <a class="navbar-item" href="contact.html">
                  <h1>Contact</h1></a>
                  </div>
          </div>
        </nav>
  <!-- End of header-->