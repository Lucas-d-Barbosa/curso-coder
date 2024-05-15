<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int pata float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';

// float pata int
var_dump((int) 6.5);
echo '<br>';
var_dump((intval(2.8)));
echo '<br>';
var_dump((int) round(2.8));



// Operações com string
echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>';
echo is_string("3" . 2);
echo '<br>';
// echo is_string("3" + 2);
echo '<br>';
// var_dump(1 + "5 cinco");
// var_dump(1 + "2+5");
echo "<br>";
var_dump(1 + "3.2");
echo "<br>";
var_dump(1 + "-3.2e2");
echo "<br>";
var_dump((int) "-3.2");
echo "<br>";
var_dump((float) "10.5");

