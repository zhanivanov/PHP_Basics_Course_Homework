<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td{
                border:1px solid black;
            }
        </style>
        <title>WordMapper</title>
    </head>

    <body>
        <form method="post">
            <textarea name="text"></textarea>
            <br/>
            <input type="submit" value="Count words"/>
        </form>
        <?php
        if(isset($_POST['text'])):
            $string = $_POST['text'];
            $words = preg_split('/\W+\s*/',strtolower($string),-1, PREG_SPLIT_NO_EMPTY);
            $result = array_count_values($words);
        ?>
            <table>
                <tbody>
                <?php
                foreach ($result as $key=>$value):
                ?>
                <tr>
                    <td>
                        <?= $key ?>
                    </td>
                    <td>
                        <?= $value ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </body>
</html>