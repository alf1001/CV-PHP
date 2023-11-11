<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM data_cv WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
</head>

<body>
  <div id="container">
    <div class="row" id="header">
      <div class="col-md-6" id="column">
        <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profile" id="image" class="">
      </div>
      <div class="col-md-6">
        <h1 class="nombre py-4 pt-5"><?php echo $data['nama']; ?></h1>
        <p id="line"></p>
        <!-- <h2 id="description">Fullstack Developer</h2> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 pt-4">
        <h4 id="Alamat">Alamat</h4>
        <p><?php echo $data['alamat']; ?></p>
      </div>
      <div class="col-md-12">
        <h4 id="Telepon">Telepon</h4>
        <p><?php echo $data['telepon']; ?></p>
      </div>
      <div class="col-md-12">
        <h4 id="Email">Email</h4>
        <p><?php echo $data['email']; ?></p>
      </div>
      <div class="col-md-12">
        <h4 id="Web">WEB</h4>
        <p>
          <i class="fab fa-github"></i>
          <?php echo $data['web']; ?>
        </p>
      </div>
      <div class="col-md-12">
        <h4 id="Pendidikan">Pendidikan</h4>
        <p><?php echo $data['pendidikan'];?></p>
      </div>
      <div class="col-md-12">
        <h4 id="Pengalaman-kerja">Pengalaman Kerja</h4>
        <p><?php echo $data['pengalaman_kerja']; ?></p>
      </div>
      <div class="col-md-12">
        <h4 id="Keterampilan">Keterampilan</h4>
        <?php echo $data['keterampilan']; ?>
      </div>
    </div>
    <div>
      <a class="btn btn-warning" href="admin.php">Update</a>
    </div>
  </div>


</body>

</html>