<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="gpd-text" style="font-size: 25px">Input Nilai</div>
  <form method="post" action="#" id="i7qw" class="form">
    <div id="ie1i" class="form-group">
      <label id="ityd" class="label">Nilai Praktik</label>
      <input type="number" placeholder="Nilai prakrik" name="praktik" class="input" required />
    </div>
    <div id="iq1t" class="form-group">
      <label id="i3jqd" class="label">Pilihan Ganda</label>
      <input type="number" placeholder="Nilai pilihan Ganda" name="pilihanGanda" class="input" required />
    </div>
    <div id="iq1t" class="form-group">
      <label id="i3jqd" class="label">Nilai Kehadiran</label>
      <input type="number" placeholder="Nilai pilihan Ganda" name="kehadiran" class="input" required />
    </div>
    <div id="iq1t" class="form-group">
      <label id="i3jqd" class="label">Nilai Sikap</label>
      <input type="number" placeholder="Nilai pilihan Ganda" name="sikap" class="input" required />
    </div>
    <div id="idpeo" class="form-group">
      <button type="submit" id="io0bt" class="button">Hitung</button>
    </div>
    <div data-form-state="success" id="i05ek" class="state-success">Thanks! We received your request
    </div>
    <div data-form-state="error" id="idxb1" class="state-error">An error occurred on processing your request, try again!
    </div>
  </form>

  <?php
    error_reporting(0);
    $praktik = $_POST['praktik'];
    $pilihanGanda = $_POST['pilihanGanda'];
    $kehadiran = $_POST['kehadiran'];
    $sikap = $_POST['sikap'];

    $nilaiAkhir = (0.6*$praktik) +  (0.3*$pilihanGanda) +  (0.05*$kehadiran) +  (0.05*$sikap);

    if(($nilaiAkhir >= 100) || ($nilaiAkhir < 0)) {
      $kriteria = "Nilai Tidak Valid";
    } elseif ($nilaiAkhir >= 95) {
      $kriteria = "Memuaskan";
    } elseif ($nilaiAkhir >= 85) {
      $kriteria = "Baik Sekali";
    } elseif ($nilaiAkhir >= 75) {
      $kriteria = "Baik";
    } elseif ($nilaiAkhir >= 65) {
      $kriteria = "Cukup";
    } else {
      $kriteria = "Tidak Lulus";
    }

    echo '<div class="gpd-text" style="font-size: 25px">Nilai Akhir : '. $nilaiAkhir.'</div>';
    echo '<br>';
    echo '<div class="gpd-text" style="font-size: 25px">Kriteria Kelulusan : '. $kriteria.'</div>';
  ?>
</body>
</html>
