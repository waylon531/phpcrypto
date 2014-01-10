<?php
echo '<form name="input" action="templar.php" method="post">
Message: <input type="text" name="message"><br>
Key: <input type="text" name="decryption">
<input type="submit" value="Decrypt">
</form>';
function bcfact($n)
{
    return ($n == 0 || $n== 1) ? 1 : bcmul($n,bcfact($n-1));
}
function bcpi($precision)
{
    $num = 0;$k = 0;
    bcscale($precision+3);
    $limit = ($precision+3)/14;
    while($k < $limit)
    {
        $num = bcadd($num, bcdiv(bcmul(bcadd('13591409',bcmul('545140134', $k)),bcmul(bcpow(-1, $k), bcfact(6*$k))),bcmul(bcmul(bcpow('640320',3*$k+1),bcsqrt('640320')), bcmul(bcfact(3*$k), bcpow(bcfact($k),3)))));
        ++$k;
    }
    return bcdiv(1,(bcmul(12,($num))),$precision);
}
if (!empty($_POST['message'])) {
    $string = $_POST['message'];
    $string = str_replace(' ', '', $string); //Strip all spaces out of the string
    $key = $_POST['decryption'];
    $keyLength = strlen($key);
    $increment = 0;
    $string2 ='';
    $lowercase = range ('a', 'z');
}

//echo bcpi(200);
?>
