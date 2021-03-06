<!DOCTYPE html>
<html>
    <head>
        <title>Sum Of Digits</title>
        <style>
            td{
                border: 1px solid black;
            }
            table{
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="input">Input string:</label>
            <input type="text" name="input" id="input"/>
            <input type="submit"/>
        </form>
        <?php
        if(isset($_POST['input']) && !empty($_POST['input'])):
            $inputString = preg_split("/,/", $_POST['input']);
        ?>
        <table>
            <tbody>
                <?php
                for($i = 0; $i < count($inputString); $i++):
                    if(is_numeric($inputString[$i])){
                        $secondRow = sumDigits($inputString[$i]);
                    }
                    else{
                        $secondRow = "I cannot sum that";
                    }
                ?>
                <tr>
                    <td><?= $inputString[$i] ?></td>
                    <td><?= $secondRow ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>

<?php
function sumDigits($number){
    return array_sum(str_split($number));
}
?>