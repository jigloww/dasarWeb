<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Hasil input: " . $input . "<br>";
} else {
    echo "Silakan isi form di bawah ini : <br><br>";
}

// Memeriksa apakah input email dikirim terlebih dahulu
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Memeriksa apakah input adalah email yang valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . htmlspecialchars($email);
    } else {
        echo "Input bukan email yang valid!";
    }
}
?>

<form method="post" action="">
    <label for="input">Masukkan teks :</label><br>
    <input type="text" name="input" id="input"><br><br>

    <label for="email">Masukkan email :</label><br>
    <input type="text" name="email" id="email"><br><br>

    <input type="submit" value="Kirim">
</form>
