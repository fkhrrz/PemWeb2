<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="form-control">
      <h3 class="mt-3">Form Nilai</h3>
      <hr />
      <form action="<?=isset($_GET['logic'])?'?logic=true':''?>" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="John Doe" required>
        </div>
        <div class="mb-3">
          <label for="matkul" class="form-label">Mata Kuliah</label>
          <select class="form-select" name="matkul" id="matkul">
            <option value="Basis Data 1">Basis Data 1</option>
            <option value="Basis Data 2">Basis Data 2</option>
            <option value="Big Data">Big Data</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="uts" class="form-label">Nilai UTS</label>
          <input type="number" class="form-control" name="uts" id="uts" min="0" max="100" required>
        </div>
        <div class="mb-3">
          <label for="uas" class="form-label">Nilai UAS</label>
          <input type="number" class="form-control" name="uas" id="uas" min="0" max="100" required>
        </div>
        <div class="mb-3">
          <label for="tugas" class="form-label">Nilai Tugas</label>
          <input type="number" class="form-control" name="tugas" id="tugas" min="0" max="100" required>
        </div>
        <div class="mb-3 text-center">
          <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
        </div>
      </form>
    </div>
    <hr />
    <div class="row">
      <?php
        if(isset($_POST['proses'])) {
          $final = ($_POST['uts'] + $_POST['uas'] + $_POST['tugas']) / 3;
          if (isset($_GET['logic']) && $_GET['logic'] == 'true') {
            if ($final <= 35) {
              $info = 'Grade : E<br /> Keterangan : Sangat Kurang';
              $class = 'alert-danger';
            } else if ($final <= 55) {
              $class = 'alert-danger';
              $info = 'Grade : D<br /> Keterangan : Kurang';
            } else if ($final < 70) {
              $class = 'alert-warning';
              $info = 'Grade : C<br /> Keterangan : Cukup';
            } else if ($final < 85) {
              $class = 'alert-success';
              $info = 'Grade : B<br /> Keterangan : Memuaskan';
            } else if ($final <= 100) {
              $class = 'alert-success';
              $info = 'Grade : A<br /> Keterangan : Sangat Memuaskan';
            } else {
              $info = 'Grade : <br /> Keterangan : Tidak Ada';
            }
            $result = '<div class="alert ' . $class . '" role="alert">Total Nilai : ' . number_format($final, 2, ',', '.') . ' <br> ' . $info . '</div>';
          }
      ?>
        <table class="table">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>Nilai UTS</th>
              <th>Nilai UAS</th>
              <th>Nilai Tugas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?=$_POST['nama']?></td>
              <td><?=$_POST['matkul']?></td>
              <td><?=$_POST['uts']?></td>
              <td><?=$_POST['uas']?></td>
              <td><?=$_POST['tugas']?></td>
            </tr>
            <?=($_GET['logic'] == 'true')?'<tr><td colspan="5">' . $result . '</td></tr>':''?>
          </tbody>
        </table>
      <?php } ?>
    </div>
  </div>
</body>
</html>