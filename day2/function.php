<?php

function tambahSatu($value) {
  $value = $value + 1;
}

$nilai = 5;
tambahSatu($nilai);

echo $nilai;

echo 'Prosedur';

function tambahSatuPro($value) {
  $value = $value + 1;
}

$result = 5;
tambahSatuPro($result);

echo $result;
?>