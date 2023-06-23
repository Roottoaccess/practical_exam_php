<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greetings_name</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<center>
    <form action="" method="post">
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" class="input">
            <br><br>
                <input type="submit" value="message" class="btn" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
                echo "<br>";
            echo "Welcome to our website $name :)";
        }
    ?>
</center>
</body>
</html>