<!DOCTYPE html> 
<html> 
    <head> 
        <style>
            table, th, td { 
                border: 1px solid black; 
                border-collapse: collapse; 
                padding: 8px;
            }
        </style>
    </head> 
    <body> 
        <?php 
        $Dosen = [ 
        'nama' => 'Elok Nur Hamdana', 
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ]; 
    
   echo "<table>"; 
   foreach ($Dosen as $key => $value) { 
    if ($key == "nama") { 
            echo "<tr style='background-color: lightgreen;'><td>$key</td><td>$value</td></tr>"; } 
        elseif ($key == "domisili") { 
            echo "<tr style='background-color: lightgreen;'><td>$key</td><td>$value</td></tr>"; } 
        elseif ($key == "jenis_kelamin") { 
            echo "<tr style='background-color: lightgreen;'><td>$key</td><td>$value</td></tr>"; } 
        else { 
            echo "<tr><td>$key</td><td>$value</td></tr>"; 
        } 
    } 
    echo "</table>"; 
    ?> 

    </body> 
    </html>