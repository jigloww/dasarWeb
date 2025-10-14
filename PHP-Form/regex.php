<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
?>
<br>
<br>
<?php
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
<br>
<br>
<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';

$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."
?>
<br>
<br>
<?php
$pattern = '/go*d/'; // Cocokkan "god", "good", "goood", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
<br>
<br>
<?php
$pattern = '/go?d/'; // Cocokkan "gd" atau "god"
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
<br>
<br>
<?php
$pattern = '/go{2,4}d/'; // Cocokkan "good", "goood", "gooood"
$text = 'god is good, goood, and gooood.';

if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokkan: " . implode(", ", $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>

