
<!DOCTYPE html>
<html>
    <head>
        <title>
            Print Tags
        </title>
    </head>
    <body>
        <form method="get" accept-charset="utf-8">      
            <div id="outer">
              <p>Enter tags:</p>
              <input type="text" name="text-field"/>
              <input type="submit" name="submit"/>
            </div>
        </form>
    </body>
</html>



<?php
if(isset($_GET['text-field'])){
    $array = preg_split("/, /", $_GET['text-field']);
    $counter = 0;
    $counts = array_count_values($array);
    $val = array_search(max($counts), $counts);
    arsort($counts);
    foreach($counts as $key=>$value){
        echo "$key : $value times <br>";
    }
    echo "Most Frequent Tag is: $val";
}

?>