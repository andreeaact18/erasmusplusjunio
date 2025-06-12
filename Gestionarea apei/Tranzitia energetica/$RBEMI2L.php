<?php

$archivo = fopen("archivo.txt", "r+");
echo fread($archivo, filesize("archivo.txt"));

/**
 * Table of Values for fopen()
 * r = read only
 * w = write only
 * a = write only
 * x = creates for a new one
 * r+ = open or read file
 * w+ = erase previous data
 * a+ = existed data preserved
 * x+ =return false or error if  the file exist
 */

echo "<br>";

while (!feof($archivo)){
    echo fgets($archivo) . "<br>";
}

while(!feof($archivo)){
    echo fgets($archivo) . " ";
}

echo "<br>";
fclose($archivo);
$nuevoArchivo = fopen("nuevoarchivo.txt", "w+");
fwrite($nuevoArchivo, $texto);
$texto = "Hola";


fclose($nuevoArchivo)

?>