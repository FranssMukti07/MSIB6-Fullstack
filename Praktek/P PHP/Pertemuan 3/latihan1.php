<?php
for ($x = 0; $x <= 10; $x++) {
    echo $x . "<br>";
}
echo "<hr>";

for ($i = 0; $i <= 10; $i++) { ?>
    <input type="radio" value="<?php $i ?>"><?= $i ?><br>
<?php } ?>