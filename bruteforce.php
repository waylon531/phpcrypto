<?php
ini_set('max_execution_time', 300);
$hash = $_POST['hash'];
echo $hash;
echo "<br>";
$increments = 0;

$lowercase = range ('a', 'z'); //Array of all lowercase
$uppercase = range ('A', 'Z'); //Array of all caps
$numbers = range (0, 9); //Array of digits
$GLOBALS['increment'] = 0;
$GLOBALS['verify'] = false;
$GLOBALS['success'] = 0;
$array = array();
if $_POST['lowercase'] = true {
    $increments = $increments + 26;
    array_merge($array, $lowercase);
}
if $_POST['uppercase'] = true {
    $increments = $increments + 26;  
    array_merge($array, $lowercase);
}
if $_POST['numbers'] = true {
    $increments = $increments + 10;  
    array_merge($array, $lowercase);
}
$incrementvalue = $increments - 1;
while ($GLOBALS['increment'] < $increments and $GLOBALS['verify'] == false) {
    if (md5($array[$GLOBALS['increment']]) == $hash) {
        echo $array[$GLOBALS['increment']];
        $GLOBALS['verify'] = true;
    }
        ++$GLOBALS['increment'];
}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
while ($GLOBALS['increment2'] < $increments and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == $incrementvalue) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
while ($GLOBALS['increment3'] < $increments and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == $incrementvalue) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == $incrementvalue) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
$GLOBALS['increment4'] = 0;
while ($GLOBALS['increment4'] < $increments and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment4']] . $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == $incrementvalue) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == $incrementvalue) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    if($GLOBALS['increment3'] == $incrementvalue) {++$GLOBALS['increment4']; $GLOBALS['increment3'] = 0;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
$GLOBALS['increment4'] = 0;
$GLOBALS['increment5'] = 0;
while ($GLOBALS['increment5'] < $increments and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment5']] . $array[$GLOBALS['increment4']] . $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == $incrementvalue) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == $incrementvalue) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    if($GLOBALS['increment3'] == $incrementvalue) {++$GLOBALS['increment4']; $GLOBALS['increment3'] = 0;}
    if($GLOBALS['increment4'] == $incrementvalue) {++$GLOBALS['increment5']; $GLOBALS['increment4'] = 0;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
echo '<p>done</p>';
echo '<form name="input" action="/bruteforce.php" method="post">
<input type="text" name="hash">
<input type="submit" value="SUBMIT"';
        echo ">
</form>";
?>
