<?php
/*
A simple arithemetic calculator that adds, subtracts, divides and performs multiplicatons accepting 2 numerical inputs (num1 and num2) from the user.
*/

$x = "";
$y = "";
$error = "";
$result = "";

if(isset($_GET['operation'])){
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $op = $_GET['operation'];


    if (is_numeric($x) && is_numeric($y)) { /*To validate numeric input before performing operation*/
        /*Switch states depending on the value of $op (operator)*/
        switch ($op) {
            case 'ADD':
                $result = $x + $y;
                break;
            
            case 'SUBTRACT':
                $result = $x - $y;
                break;
    
            case 'DIVIDE':
                if ($y == 0) {
                    $error = "Divisor can't be zero. Please input a new number.";
                }else {
                    $result = $x / $y;
                }
                break;
    
    
            case 'MULTIPLY':
                $result = $x * $y;
                break;

    
            default:
                $result = 'Undefined';
                break;
        }    
    }else {
        $error = "Enter Number first";
    }

    }




?>







<!DOCTYPE html>
<!------------------------------------------------HTML----------------------------------------------------->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Arithemetic Calculator</title>
</head>
<body>
    <center>
        <h1>SIMPLE ARITHEMETIC CALCULATOR</h1>
        <p><i>Hi, I Could help you perform very basic arithemetic calculations</i></p>
    </center>
    
    <h2><?= $error ?></h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method = "get">

        <fieldset>
            <legend>INPUT</legend>

            <div>
            <label for="num1">First Number: </label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
            </div>

            <div>
                <label for="num2">Second Number: </label>
                <input type="number" name="num2" id="num2" value="<?= $y ?>">
            </div>
        </fieldset>
        
        <div>
            <label for="result">Result: </label>
            <input type="number" id="result" value="<?= $result ?>" disabled>
        </div>
      

        <fieldset>
            <legend>OPERAND</legend>
            <div>
                <input type="submit" value="ADD" name="operation">
                <input type="submit" value="SUBTRACT" name="operation">
                <input type="submit" value="DIVIDE" name="operation">
                <input type="submit" value="MULTIPLY" name="operation">
            </div>
        </fieldset>
        
    </form>

</body>

    <style>
        /*********************************CSS STYLE*******************************************/
        *{
            background-color: #000;
            color: #CCC;
            font-family: Helvetica, sans-serif;
        }

        form {
          /* Center the form on the page */
          margin: 0 auto;
          width: 550px;
          /* Form outline */
          padding: 1em;
          border: 1px solid #CCC;
          border-radius: 1em;
        }

        legend {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
        }

        input {
            margin: .4rem;
              /* To make sure that all text fields have the same font settings
                 By default, textareas have a monospace font */
            font: 1em Georgia;

              /* Uniform text field size */
            width: 110px;
            box-sizing: border-box;

              /* Match form field borders */
            border: 2px solid #999;
            border-radius: 20px;
            }


            input[type="submit"] {
              border: #333;
              background-color: #999;
              border-radius: 5px;
              padding: 5px 1.3em;
              color: #003;
            }

            input[type="submit"]:hover {
              background-color: #333;
            }

        
        label {
          text-transform: uppercase;
        }
    </style>
</html>