<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swipe_number</title>
</head>
<style>
    body{
        background-color: bisque;
    }
</style>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <th>
                        <label for="number1">Enter the first number: </label>
                    </th>
                    <td>
                        <input type="number" name="number1" id="number1" class="number1">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="number2">Enter the second number: </label>
                    </th>
                    <td>
                        <input type="number" name="number2" id="number2" class="number2">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <th>
                        <input type="submit" value="Result" name="submit">
                    </th>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];

                $number3 = $number1;
                $number1 = $number2;
                $number2 = $number3;
            echo "<br>";
                echo "The first number $number1 and second number is $number2";
            }
        ?>
    </center>
</body>
</html>