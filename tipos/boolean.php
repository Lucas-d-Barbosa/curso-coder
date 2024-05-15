<div class="titulo">Tipo Boolean</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // Apenas zero é false
echo '<br>' . var_dump((bool) 20); // True
echo '<br>' . var_dump((bool) -20); // True
echo '<br>' . var_dump((bool) 0.0); // False
echo '<br>' . var_dump((bool) 0.0000000001); // True
echo '<br>' . var_dump((bool) ""); // False
echo '<br>' . var_dump((bool) " "); // True
echo '<br>' . var_dump((bool) "0"); // False
echo '<br>' . var_dump((bool) "00"); // True

echo '<br>' . var_dump(!!'false');