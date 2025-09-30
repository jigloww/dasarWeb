<html>
<head>
    <title>Cara 01 (php dalam html)</title> 
</head>
<body> 
    <p>Tanggal Hari ini : <?php echo date("d M Y"); ?></p>
</body>
</html>

<?php
echo '<html>';
echo '<head><title>Cara 02 (html dalam php)</title></head>';
echo '<body>';
echo '<p>Tanggal Hari ini : ' . date("d M Y") . '</p>';
echo '</body>';
echo '</html>';
?>
