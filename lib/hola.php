<?php
// Autor: Gabriel Sierra <gabriel@prueba.com>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);