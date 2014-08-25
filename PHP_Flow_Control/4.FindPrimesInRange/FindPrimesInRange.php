<!DOCTYPE html>
<html>
    <head>
        <title>FindPrimesInRange</title>
    </head>
    <body>
        <form method="post">
            <label for"start">Starting index</label>
            <input type="text" name="start" id="start"/>
            <label for="end">End</label>
            <input type="text" name="end" id="end"/>
            <input type="submit"value="Submit"/>
        </form>
        <?php
        if(isset($_POST['start']) && isset($_POST['end']) && !empty($_POST['start']) && !empty($_POST['end'])):
            $start = $_POST['start'];
            $end = $_POST['end'];
            for($start; $start < $end; $start++):
                if(checkPrime($start)){
                    if($start+1==$end){
                        echo '<b>'.$start.'</b>';
                    }
                    else{
                        echo '<b>'.$start.'</b>'.',';    
                    }
                }
                else{
                    if($start+1==$end){
                        echo $start;
                    }
                    else{
                        echo $start.',';   
                    }
                }
        ?>
        <?php endfor; ?>
        <?php endif; ?>
    </body>
</html>

<?php
function checkPrime($number){
    for($i = 2; $i<$number; $i++){
        if($number%$i==0){
            return false;
        }
    }
    return true;
}
?>