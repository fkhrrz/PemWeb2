<?php
  $harga = [
    "TV" => 4200000,
    "Kulkas" => 3100000,
    "Mesin Cuci" => 3800000,
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul class="list-group">
          <li class="list-group-item list-group-item-info">Informasi</li>
          <li class="list-group-item">TV : Rp 4,200,000</li>
          <li class="list-group-item">Kulkas : Rp 3,100,000</li>
          <li class="list-group-item">Mesin Cuci : Rp 3,800,000</li>
        </ul>
      </div>
      <div class="col-md-8">
        <form method="POST" action="">
          <div class="mb-3">
            <label for="customer" class="form-label">Customer</label>
            <input type="text" class="form-control" name="customer" id="customer" placeholder="John Doe" required>
          </div>
          <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <div id="produk">
              <input type="radio" class="btn-check" name="produk" id="tv" value="TV" autocomplete="off" required>
              <label class="btn btn-outline-warning" for="tv">TV</label>
              <input type="radio" class="btn-check" name="produk" id="kulkas" value="Kulkas" autocomplete="off">
              <label class="btn btn-outline-primary" for="kulkas">Kulkas</label>
              <input type="radio" class="btn-check" name="produk" id="mesin-cuci" value="Mesin Cuci" autocomplete="off">
              <label class="btn btn-outline-info" for="mesin-cuci">Mesin Cuci</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" min="0" max="100" required>
          </div>
          <div class="mb-3 text-center">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
          </div>
        </form>
      </div>
    </div>
    <hr />
    <div class="row">
      <?php if(isset($_POST['proses'])) { ?>
        <table class="table">
          <thead>
            <tr>
              <th>Customer</th>
              <th>Produk</th>
              <th>Jumlah</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?=$_POST['customer']?></td>
              <td><?=$_POST['produk']?></td>
              <td><?=$_POST['jumlah']?></td>
              <td>Rp <?=number_format($harga[$_POST['produk']] * $_POST['jumlah'],0,",",".")?></td>
            </tr>
          </tbody>
        </table>
      <?php } ?>
    </div>
  </div>
</body>
</html>