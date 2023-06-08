<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'dbconnect.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobno=$_POST['mobno'];
    $wtspno=$_POST['wtspno'];
    $intro=$_POST['intro'];
    $grad=$_POST['grad'];    
    $sql = "INSERT INTO `survey` (`name`,`email`, `mobno`,`wtspno`,`intro`, `grad`)
    VALUES ('$name' ,'$email', '$mobno','$wtspno','$intro','$grad') ";
    $result = mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cogent</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section id="main">
        <img src="logo.png" alt="">
        <div class="container">
            <h1 class="h-primary">Cogent Developers Network Registration Form</h1>
            <form action="form.php" method="post">
                <div class="container-x">
                    <div class="x-heading">
                        1. Name
                    </div>
                    <div class="data">
                        <input class="text" type="text" name="name" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <div class="container-x">
                    <div class="x-heading">
                        2. E-Mail
                    </div>
                    <div class="data">
                        <input class="text" type="email" name="email" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <div class="container-x">
                    <div class="x-heading">
                        3. Graduation Year
                    </div>
                    <div class="data">
                        <input class="text" type="text" name="grad" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <div class="container-x">
                    <div class="x-heading">
                        4. Mobile Number
                    </div>
                    <div class="data">
                        <input class="text" type="number" name="mobno" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <div class="container-x">
                    <div class="x-heading">
                        5. Whatsapp Number
                    </div>
                    <div class="data">
                        <input class="text" type="text" name="wtspno" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <div class="container-x">
                    <div class="x-heading">
                        6. Short Introduction About Me
                    </div>
                    <div class="data">
                        <input class="text" type="text" name="intro" required>
                        <p class="required">Required</p>
                    </div>
                </div>
                <button href="form.php" class="btn">REGISTER NOW</button>
            </form>
        </div>
    </section>
    
</body>
</html>