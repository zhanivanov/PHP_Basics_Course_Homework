<!DOCTYPE html>
<html>
    <head>
        <title>Car Randomizer</title>
        <style>
            th,td{
                border: 1px solid green;
            }
            table {
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="cars">Enter cars</label>
            <input type="text" name="cars" id="cars"/>
            <input type="submit" value="Show result"/>
        </form>
        <?php
        if(isset($_POST['cars']) && !empty($_POST['cars'])):
                $cars = preg_split("/, /", $_POST['cars']);
                $colours = ["yellow","red","green","blue","black","grey"];
        ?>
        <table>
                <thead>
                    <tr>
                        <th>Car</th>
                        <th>Colour</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($cars as $carName) :
                        $count = rand(1, 5);
                        $colour = array_rand($colours);
                    ?>
                    <tr>
                        <td><?= $carName ?></td>
                        <td><?= $colours[$colour] ?></td>
                        <td><?= $count ?></td>
                    </tr>
                    <?php  
                    endforeach;
                    ?>
                </tbody>
        </table>    
        <?php endif; ?>
    </body>
</html>
