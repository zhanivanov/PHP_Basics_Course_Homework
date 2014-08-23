<!DOCTYPE html>
<html>
    <head>
        <title>Calculate Interest</title>
    </head>
    <body>
        <form method="post">
            <div id="outer">
                <label for="money">Enter Amount</label>
                <input type="text" id="money" name="money-amount"/>
                <br>
                <input type="radio" name="radio-group" id="usd" value="usd"/>
                <label for="usd">USD</label>
                <input type="radio" name="radio-group" id="eur" value="eur"/>
                <label for="eur">EUR</label>
                <input type="radio" name="radio-group" id="bgn" value="bgn"/>
                <label for="bgn">BGN</label>
                <br>
                <label for="interest">Compound Interest Amount</label>
                <input type="text" name="interest" id="interest" />
                <br>
                <select name="period">
                    <option value="6-months">6 Months</option>
                    <option value="1-year">1 Year</option>
                    <option value="2-years">2 Years</option>
                    <option value="5-years">5 Years</option>
                </select>
                <input type="submit" value="Calculate"/>
            </div>
        </form>
    </body>
</html>



<?php
if(isset($_POST['money-amount'])){
    $money = $_POST['money-amount'];
    $period = $_POST['period'];
    $currency = $_POST['radio-group'];
    $interest = $_POST['interest'];
    
    switch($period){
        case "6-months":$period = 6;
                break;
        case "1-year":$period = 12;
                break;
        case "2-years":$period = 24;
                break;
        case "5-years":$period = 60;
                break;
    }
    $result = round($money * pow(1 + (($interest / 100) / 12), $period / 12 * 12), 2);

    if($currency == 'usd') {
        $result = '$ ' . $result;
    }
    else if($currency == 'eur') {
        $result = '&#8364; ' . $result;
    }
    else {
        $result .= " Lv.";
    }
    echo $result;
}
?>