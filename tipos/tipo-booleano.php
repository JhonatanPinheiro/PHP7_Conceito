<div class="title">TIPO - FLOAT (FLUTUANTE) </div>
<hr><br>
<?php
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False); 
echo '<br>' . is_bool('false') . '<br>';
echo '<br>' . is_bool(false) . '<br>';
echo '<br>' . is_bool(true) . '<br>';
echo '<br>' . var_dump((bool)0);
echo '<br>' . var_dump((string)0); // Apenas zero é false 
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) "0");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");

?>