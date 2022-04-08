<?php
for ($nilai = 0; $nilai <= 20; $nilai++) {
  echo $nilai . ' adalah bilangan ';
  echo $nilai % 2 === 0 ? 'Genap <br>' : 'Ganji <br>';
}
?>