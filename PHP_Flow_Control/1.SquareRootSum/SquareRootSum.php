<!DOCTYPE html>
<html>
    <head>
        <title>Square Root Sum</title>
        <style>
            table,tr,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Square</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sum = 0;
                    for($i = 0; $i<=100; $i+=2): 
                        $sqrt = sqrt($i);
                        $sum += $sqrt;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= round($sqrt, 2) ?></td>
                </tr>
                <?php endfor; ?>
                <tr>
                    <td><b>Total:</b></td>
                    <td><?= round($sum,2) ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>