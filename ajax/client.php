<?php
require '../function.php';
$keyword = $_GET["keyword"];
$query="SELECT * FROM contact 
WHERE   
nama LIKE '%$keyword%' OR
email LIKE '%$keyword%' OR
kategori LIKE '%$keyword%' OR
phone LIKE '%$keyword%' 
";
$client=query($query);
?>
<table class="table table-bordered table-striped">
    <tr style="font-weight:bold;" class="info">
    <td>No.</td>
    <td>Aksi</td>
    <td>Nama</td>
    <td>Email</td>
    <td>phone</td>
    <td>Kategori Contact</td>
    <td>message</td>
    </tr>

    <?php $i = 1;?>
    <!-- buat looping untuk menampilkan data dari database -->
    <?php foreach($client as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
    <td><a class="glyphicon glyphicon-pencil" href="ubah.php?id=<?= $row["id"];?>">Ubah</a>|
    <a class = "glyphicon glyphicon-trash" href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["email"];?></td>
    <td><?= $row["phone"];?></td>
    <td><?= $row["kategori"];?></td>
    <td><?= $row["message"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>