<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current date and time.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }
</style>

<body>
    <center>
        <form action="" method="post">
            <label for="display">Click here to display the date information</label>
            <input type="submit" value="Display" name="operation">
        </form>
        <br><br>
        <h3>
        <?php
            if(isset($_POST['operation'])){
                $current_date = getdate();
                
                echo "<p> Current date and time is: ".$current_date['weekday'].", ".$current_date['month'].", ".$current_date['mday'].", ".$current_date['year'].", ".$current_date['hours'].", ".$current_date['minutes'].", ".$current_date['seconds'];
            }
        ?>
        </h3>
        <br><hr>
    </center>
</body>
</html>