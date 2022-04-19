<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 1</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <?php
    $head = ['ID', 'NIM', 'UTS', 'UAS', 'TUGAS'];
    $data1 = ['id' => 1, 'nim' => '0110119001', 'uts' => 60, 'uas' => 65, 'tugas' => 70];
    $data2 = ['id' => 2, 'nim' => '0110119002', 'uts' => 70, 'uas' => 75, 'tugas' => 80];
    $data3 = ['id' => 3, 'nim' => '0110119003', 'uts' => 80, 'uas' => 85, 'tugas' => 90];
    $data4 = ['id' => 4, 'nim' => '0110119004', 'uts' => 90, 'uas' => 95, 'tugas' => 100];
    $combined = [$data1, $data2, $data3, $data4];
  ?>

  <div class="container">
    <h3 class="text-center mt-5">Daftar Nilai Siswa</h3>
    <div class="table-responsive mt-1   ">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <?php foreach ($head as $item) { ?>
              <th scope="col"><?=$item?></th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($combined as $item) { ?>
            <tr>
              <td scope="col"><?= $item['id'] ?></td>
              <td scope="col"><?= $item['nim'] ?></td>
              <td scope="col"><?= $item['uts'] ?></td>
              <td scope="col"><?= $item['uas'] ?></td>
              <td scope="col"><?= $item['tugas'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>