<!DOCTYPE html>
<html>
    <head>
        <style>
            .red{
                color:red;
            }
            .blue{
                color:blue;
            }
        </style>
        <title>ColoringText</title>
    </head>
    <body>
        <form method="post">
            <textarea name="text"></textarea>
            <input type="submit" value="Color Text!"/>
        </form>
        <?php
        if(isset($_POST['text'])):
            $input = $_POST['text'];
            $chars = str_split($input);
            foreach($chars as $char){
                if(ord($char)%2==0){
                    echo "<span class='red'>$char</span>";
                }
                else{
                    echo "<span class='blue'>$char</span>";
                }
            }

        ?>

        <?php
        endif;
        ?>
    </body>
</html>