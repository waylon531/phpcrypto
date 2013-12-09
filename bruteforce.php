<?php
ini_set('max_execution_time', 300);
$hash = $_POST['hash'];
echo $hash;
echo "<br>";
$array = range ('a', 'z');
$array[26] = 9001;
$GLOBALS['increment'] = 0;
$GLOBALS['verify'] = false;
$GLOBALS['success'] = 0;
while ($GLOBALS['increment'] < 26 and $GLOBALS['verify'] == false) {
    if (md5($array[$GLOBALS['increment']]) == $hash) {
        echo $array[$GLOBALS['increment']];
        $GLOBALS['verify'] = true;
    }
        ++$GLOBALS['increment'];
}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
while ($GLOBALS['increment2'] < 26 and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == 25) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
while ($GLOBALS['increment3'] < 26 and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == 25) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == 25) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
$GLOBALS['increment4'] = 0;
while ($GLOBALS['increment4'] < 26 and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment4']] . $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == 25) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == 25) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    if($GLOBALS['increment3'] == 25) {++$GLOBALS['increment4']; $GLOBALS['increment3'] = 0;}
    ++$GLOBALS['increment'];
    //echo "1<br>";

}
$GLOBALS['increment'] = 0;
$GLOBALS['increment2'] = 0;
$GLOBALS['increment3'] = 0;
$GLOBALS['increment4'] = 0;
$GLOBALS['increment5'] = 0;
while ($GLOBALS['increment5'] < 26 and $GLOBALS['verify'] == false) {
    $words = $array[$GLOBALS['increment5']] . $array[$GLOBALS['increment4']] . $array[$GLOBALS['increment3']] . $array[$GLOBALS['increment2']] . $array[$GLOBALS['increment']];
    if (md5($words) == $hash) {
        echo $words;
        $GLOBALS['verify'] = true;
    }
    //echo $words . "<br>";
    //echo $GLOBALS['increment'];
    //echo $GLOBALS['increment2'];
    if($GLOBALS['increment'] == 25) {++$GLOBALS['increment2']; $GLOBALS['increment'] = -1;}
    if($GLOBALS['increment2'] == 25) {++$GLOBALS['increment3']; $GLOBALS['increment2'] = 0;}
    if($GLOBALS['increment3'] == 25) {++$GLOBALS['increment4']; $GLOBALS['increment3'] = 0;}
    if($GLOBALS['increment4'] == 25) {++$GLOBALS['increment5']; $GLOBALS['increment4'] = 0;}
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