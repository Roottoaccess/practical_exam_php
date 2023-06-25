<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_calculator.com</title>
</head>
<style>
    body{
        background-color: bisque;
    }

    *{
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: aqua;
        color: blue;
        border: 2px solid black;
    }
</style>
<body>
    <center>
        <div class="container">
            <h3>
                <b><i>Basic Calculator</i></b>
            </h3>
        </div>
        <br><br>
        <form action="calculator.php" method="post">
            <table border="2px solid black">
                <tr>
                    <th>
                        <label for="number1">Enter the first number: </label>
                    </th>
                    <td>
                        <input type="number" name="number1" id="number1" placeholder="First number">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="number2">Enter the second number: </label>
                    </th>
                    <td>
                        <input type="number" name="number2" id="number2" placeholder="Second number">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="choice">Enter the operation: </label>
                    </th>
                    <td>
                        <select name="choice" id="choice">
                            <option value="">--SELECT--</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="btn">Click here for result: </label>
                    </th>
                    <td>
                        <input type="submit" value="Result" name="operation">
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <h3>
        <?php
            if(isset($_POST['operation'])){
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $choice = $_POST['choice'];

                switch($choice){
                    case '+':
                        $result = $number1 + $number2;
                        echo "The result is: $result";
                        break;
                    case '-':
                        $result = $number1 - $number2;
                        echo "The result is: $result";
                        break;
                    case '*':
                        $result = $number1 * $number2;
                        echo "The result is: $result";
                        break;
                    case '/':
                        $result = $number1 / $number2;
                        echo "The result is: $result";
                        break;
                    default:
                    echo "Please enter a valid number or operation !";
                }
            }
        ?>
        </h3>
    </center>
</body>
</html>