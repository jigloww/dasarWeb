<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Hasil input: " . $input;
} else {
    echo "Silakan isi form di bawah ini : <br><br>";
}
?>

<form method="post" action="">
    <label for="input">Masukkan teks :</label>
    <input type="text" name="input" id="input">
    <input type="submit" value="Kirim">
</form>
