<?php
echo '<form name="input" action="bruteforce.php" method="post">
<input type="checkbox" name="lowercase" value="true">Check lowercase letters<br>
<input type="checkbox" name="uppercase" value="true">Check uppercase letters<br>
<input type="checkbox" name="numbers" value="true">Check numbers<br>
<input type="text" name="hash">
<input type="submit" value="SUBMIT"';
        echo ">
</form>";
echo '<p>Password 5 characters or less in unsalted md5 will be cracked</p>'
?>
