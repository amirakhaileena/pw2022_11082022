<?php
//menghubungkan ke database dan memilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_11082022');
//query database
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//ubah database kedalam array
// $row = mysqli_fetch_row($result); ini row numeric

// $row = mysqli_fetch_assoc($result); ini array assoc / asosiative

// $row = mysqli_fetch_array($result); ini array ke duanya numeric dan asosiative
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke dalam variable
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar data mahasiswa</title>
</head>

<body>
  <h3>Daftar Data mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>gambar</th>
      <th>Nrp</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['gambar']; ?></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">Edit</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>