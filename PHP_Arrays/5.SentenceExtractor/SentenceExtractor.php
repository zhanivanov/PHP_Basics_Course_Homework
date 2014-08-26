<!DOCTYPE html>
<html>
<head>
    <title>SentenceExtractor</title>
</head>
<body>
<form method="post">
    <textarea name="text"></textarea>
    <input type="text" name="needle"/>
    <input type="submit"/>
</form>
<?php
if(isset($_POST['text']) && isset($_POST['needle'])):
    $str = $_POST['text'];
    $needle = $_POST['needle'];
    $delimiters = ",.?!";
    $sentences = [];
    $char_buff = preg_split('/([' . $delimiters . '])/m', $str, -1,
        PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    for($i = 0,$j = 0; $i < count($char_buff)-2;$i+=2,$j++){
        if( $char_buff[$i+1]==null){
            continue;
        }
        else{
            $char_buff[$i] .= $char_buff[$i+1];
            $sentences[$j] = $char_buff[$i];
        }
    }
        foreach ($sentences as $sentence) :
        if (preg_match("/\s+$needle\s+.*[.?!]+$/", $sentence)) :
            ?>
            <p><?= $sentence ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>