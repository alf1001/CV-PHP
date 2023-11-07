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

<body class="p-3">
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container" >
      <h1>Curriculum Vitae</h1>
      <a class="navbar-brand" href="admin.php">Update</a>
    </div>
  </nav>
  <div class="card" style="background-color: #465967; height:85vh">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text">
          <i class="fab fa-github"></i>
          <?php echo $data['web']; ?></p>
        <h2 class="pt-3">Pendidikan</h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h2 class="pt-3">Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h2 class="pt-3">Keterampilan</h2>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div>
  <!-- Tampilkan komentar -->
  <!-- <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Komentar</h1>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <div id="comments">
        <?php
        include 'config.php';

        $cvId = 1; 
        $query = "SELECT * FROM comments WHERE cv_id = $cvId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($comment = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">' . $comment['comment_text'] . '</div>';
          }
        } else {
          echo 'Belum ada komentar.';
        }

        mysqli_close($conn);
        ?>
      </div>
      <label for="commentInput" class="form-label">Tambahkan Komentar</label>
      <textarea class="form-control" id="commentInput" name="comment" rows="3" placeholder="Tambahkan komentar..."></textarea>
      <button class="btn btn-primary" onclick="addComment()">Tambah Komentar</button>
    </div>
  </div> -->

</body>

</html>