<!DOCTYPE html>
<html>
    <head>
        <title>Annual Expenses</title>
        <style>
            th,td{
                border:1px solid green;
                padding:5px;
            }
            table{
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="field">Enter number of years</label>
            <input type="text" name="input" id="field"/>
            <input type="submit" value="Show costs"/>
        </form>
        <?php
        if(isset($_POST['input']) && !empty($_POST['input'])):
            $years = $_POST['input'];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Year</th>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $currYear = date("Y");
                    for($i = 1; $i <= $years; $i++,$currYear--):
                        $annualExpense = 0;
                ?>
                <tr>
                    <td><?= $currYear ?></td>
                    <?php
                    for($j = 0; $j < 12;$j++):
                        $currExpense = rand(0,999);
                        $annualExpense += $currExpense;
                    ?>
                    <td><?= $currExpense ?></td>
                    <?php endfor; ?>
                    <td><?= $annualExpense ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>