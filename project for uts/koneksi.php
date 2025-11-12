<?php
function get_pg_connection() {
    static $conn = null;

    if ($conn === null) {
        $host = 'localhost';
        $port = '5432';
        $dbname = 'triveweb';
        $user = 'postgres';
        $pass = 'Jamdinding20';

        $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
        if (!$conn) {
            die('Koneksi ke database gagal: ' . pg_last_error());
        }
    }

    return $conn;
}

// Fungsi query langsung
function q($sql) {
    $conn = get_pg_connection();
    $res = pg_query($conn, $sql);
    if (!$res) {
        die('Query error: ' . pg_last_error($conn));
    }
    return $res;
}

// Fungsi query dengan parameter
function qparams($sql, $params) {
    $conn = get_pg_connection();
    $res = pg_query_params($conn, $sql, $params);
    if (!$res) {
        die('Query error: ' . pg_last_error($conn));
    }
    return $res;
}
?>
