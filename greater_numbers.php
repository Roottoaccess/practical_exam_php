<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greater_number</title>
</head>
<style>
    body{
        background-color: bisque;
    }
</style>
<body>
    <center>
        <form action="" method="post">
            <table border="4px">
                <tr>
                    <td>
                    <label for="number1">Enter the first number: </label>
                    </td>
                    <th>
                    <input type="number" name="number1" id="number1">
                    </th>
                </tr>
                <tr>
                    <td>
                    <label for="number2">Enter the second number: </label>
                    </td>
                    <th>
                    <input type="number" name="number2" id="number2">
                    </th>
                </tr>
                <tr>
                    <td>
                    <label for="number3">Enter the third number: </label>
                    </td>
                    <th>
                    <input type="number" name="number3" id="number3">
                    </th>
                </tr>
                <tr>
                    <th>
                    <input type="submit" value="Check" name="submit" class="btn">
                    </th>
                </tr>
            </table>
        </form>
                <?php
                echo "<br>";
                    if(isset($_POST['submit'])){
                        $number1 = $_POST['number1'];
                        $number2 = $_POST['number2'];
                        $number3 = $_POST['number3'];

                        if($number1 > $number2 && $number1 > $number3){
                            echo "$number1 is the greatest of all";
                        } else if($number2 > $number1 && $number2 > $number3){
                            echo "$number2 is the greatest of all";
                        } else {
                            echo "$number3 is the greatest of all";
                        }
                    }
                ?>
    </center>
</body>
</html>