<!DOCTYPE html>
<html>
    <head>
        <title>Text Filter</title>
    </head>
    <body>
        <form method="post">
            <textarea name="text"></textarea>
            <br/>
            <label for="banlist">Banlist:</label>
            <input type="text" name="banlist" id="banlist"/>
            <input type="submit"/>
        </form>
        <?php
        if(isset($_POST['text']) && isset($_POST['banlist'])){
            $inputText = $_POST['text'];
            $banList = preg_split("/[, ]+/",$_POST['banlist'],-1,PREG_SPLIT_NO_EMPTY);
            $replace='';
            for($i = 0; $i<count($banList); $i++){
                for($j = 0; $j<strlen($banList[$i]);$j++){
                    $replace .= '*';
                }
                $inputText = str_replace($banList[$i],$replace,$inputText);
                $replace='';
            }
        }
        ?>
    <p><?= htmlentities($inputText) ?></p>
    </body>
</html>