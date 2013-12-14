<?php
echo '<form name="input" action="/bruteforce.php" method="post">
<input type="checkbox" name="method[]" value="lowercase">Chech lowercase letters<br>
<input type="checkbox" name="method[]" value="uppercase">Check uppercase letters<br>
<input type="checkbox" name="method[]" value="number">Check numbers<br>
<input type="text" name="hash">
<input type="submit" value="SUBMIT"';
        echo ">
</form>";
echo '<p>Password 5 characters or less in unsalted md5 will be cracked</p>'
?>
