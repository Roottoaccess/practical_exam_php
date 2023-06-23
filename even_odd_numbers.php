<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_numbers</title>
</head>
<style>
    body{
        background-color: bisque;
    }
</style>
<body>
    <center>
        <form action="even_odd_numbers.php" method="post">
            <label for="number1">Enter the number you want to check: </label>
            <input type="number" name="number" id="number" class="number">
                <br><br>
                <input type="submit" value="check" name="submit">
        </form>

        <?php
        echo "<br>";
            if(isset($_POST['submit'])){
                $number = $_POST['number'];
                if($number < 0){
                    echo "Your number $number is (-ve) number.";
                }
                else if($number == 0){
                    echo "Your number $number is not positive or negative.";
                }
                else{
                    echo "Your number $number is (+ve) number.";
                }
            }
        ?>
    </center>
</body>
</html>