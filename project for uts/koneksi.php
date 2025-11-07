<?php
function get_pg_connection() {
    $host = 'localhost';
    $port = '5432';
    $dbname = 'triveweb';
    $user = 'postgres';
    $pass = 'Jamdinding20';

    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

    if (!$conn) {
        die('Koneksi gagal: ' . pg_last_error());
    }

    return $conn;
}

// Fungsi bantu query langsung
function q($sql) {
    $conn = get_pg_connection();
    $res = pg_query($conn, $sql);
    if (!$res) {
        throw new Exception(pg_last_error($conn));
    }
    return $res;
}

// Fungsi bantu query dengan parameter
function qparams($sql, $params) {
    $conn = get_pg_connection();
    $res = pg_query_params($conn, $sql, $params);
    if (!$res) {
        throw new Exception(pg_last_error($conn));
    }
    return $res;
}
?>
