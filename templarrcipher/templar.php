<?php
echo '<form name="input" action="templar.php" method="post">
Message: <input type="text" name="message"><br>
Key: <input type="text" name="decryption">
<input type="submit" value="Decrypt"';
        echo ">
</form>";
    echo "<p>Decryption key should only contain one of each number, and each number should be it's length or less (53421, 32415, 312, 321) or letters will be cut out</p>";
if (!empty($_POST['message'])) {
    $string = $_POST['message'];
    $string = str_replace(' ', '', $string); //Strip all spaces out of the string
    $key = $_POST['decryption'];
    $len = strlen($string);
    $keyLength = strlen($key);
    $increment = 0;
    $string2 ='';
    $lowercase = range ('a', 'z');
    while ($increment < $len) {
        $inc = 2;
        if ($keyLength > 1) {
            $a = $string[$increment++];
            $b = $string[$increment++];
        }
        $work = $keyLength + 1;
        while ($inc < $keyLength) { //while loop to create extra variables for swapping
            ${$lowercase[$inc++]} = $string[$increment++];
        }
        $number = 1;
        while ($number <= $keyLength) { //Move letters into correct places
            $pos = strpos($key, strval($number++));
            $string2 = $string2 . ${$lowercase[$pos]};
        }
    }
    echo "<br>" . $string2;
}
?>