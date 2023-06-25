<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrom.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }

    .btn {
        margin: 5px;
        padding: 5px;
        border-color: brown;
        border-radius: 8px;
    }

    .input {
        margin: 5px;
        padding: 5px;
        border-radius: 8px;
        border-color: brown;
    }

    table {
        border-radius: 5px;
        margin: 5px;
        padding: 5px;
        border-color: brown;
    }

    th {
        border-radius: 2px;
        /* margin: 5px;
        padding: 5px; */
        border-color: brown;
    }

    td {
        border-radius: 2px;
        /* margin: 5px;
        padding: 5px; */
        border-color: brown;
    }
</style>

<body>
    <center>
        <br><br>
        <form action="palindrom.php" method="post">
            <table border="2px solid black">
                <tr>
                    <th>
                        <label for="input"><b><i>Enter the number or string: </i></b></label>
                    </th>
                    <td>
                        <input type="text" name="pal" id="pal" class="input" placeholder="Enter here" required>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="check" name="operation" class="btn">
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <h3>
            <?php
            if (isset($_POST['operation'])) {
                $input = $_POST['pal'];

                $new_input = strrev($input);

                if ($input == $new_input) {
                    echo "Your entered input $input is palindrom !";
                } else {
                    echo "Your entered input $input is not palindrom !";
                }
            }
            ?>
        </h3>
    </center>
</body>
</html>