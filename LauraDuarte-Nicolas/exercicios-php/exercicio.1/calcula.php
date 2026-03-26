<?php
$num = $_POST["num"];

if ($num >= 100 && $num <= 200) {
?>
    <p><?php echo "$num está entre 100 e 200"; ?></p>
<?php
} else {
?>
    <p><?php echo "$num não está entre 100 e 200"; ?></p>
<?php
}
?>