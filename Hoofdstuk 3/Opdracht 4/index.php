<!DOCTYPE html>
<html>
    <head>
       <style>
            body{
               text-align: center;
        }

            .red{
                border: red solid 5px;
                width: 290px;
                height: 290px;
            }
            .green{
                border: green solid 5px;
                width: 290px;
                height: 290px;
            }
        </style>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            if ($i%2 == 0) {
                $class = "class = 'red'";
            } else {
                $class = "class = 'green'";
            }
            echo "<img " . $class . "src='apen/aap" . $i . ".jpg'>";
        }
?>


