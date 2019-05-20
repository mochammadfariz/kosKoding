<?php
session_start();
// jika blom ada/blom dibuat session login maka ketika user membuka view.php tendang ke login.php
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'function.php';
// untuk menerima GET dari link berupa id
$id=$_GET["id"];

    // id dikirim ke function  hapus
    if( hapus($id) > 0){
        echo"<script> alert('data berhasil dihapus!');
        document.location.href = 'view.php';
        </script>";
    }else{
        echo"<script> alert('data gagal dihapus!');
        document.location.href = 'view.php';
        </script>";
      }
    

?>