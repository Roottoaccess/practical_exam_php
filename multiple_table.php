<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: bisque;
    }
</style>
<body>
    <center>
        <form action="multiple_table.php" method="post">
            <label for="number">Enter any number to find the table: </label>
            <input type="number" name="number" id="number">
            <br><br>
                <input type="submit" value="Create" name="submit" class="btn">
        </form>
        <h3>Table Generated</h3>
        <?php
//        echo "<br>";
            if(isset($_POST['submit'])){
                $number = $_POST['number'];
                # Making the calculation of the number
                    for($i = 1; $i <= 10; $i++){
                        $result = $number * $i;
                            echo "$number X $i = $result <br>";
                    }
            }
        ?>
    </center>
</body>
</html>