<?php

//create connection
$conn = mysqli_connect("localhost","root","","portfollio");
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    //ambil data dari tiap form

  $name=htmlspecialchars($data["nama"]);
  $email=htmlspecialchars($data["email"]);
  $phone=htmlspecialchars($data["phone"]);
  $category=htmlspecialchars($data["kategori"]);
  $message=htmlspecialchars($data["message"]);

  //query insert
  $query = "INSERT INTO contact VALUES ('','$name','$email','$phone','$category','$message')";
  mysqli_query($conn,$query);

  return mysqli_affected_rows( $conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM contact WHERE id = $id");
     return mysqli_affected_rows($conn);
}

function cari($keyword) {
    
    $query="SELECT * FROM contact 
    WHERE   
    nama LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    kategori LIKE '%$keyword%' OR
    phone LIKE '%$keyword%' 
    ";
  
    return query($query);
}

function ubah($data){
global $conn;

$id = $data["id"];
$name=htmlspecialchars($data["nama"]);
$email=htmlspecialchars($data["email"]);
$phone=htmlspecialchars($data["phone"]);

//query insert
$query = "UPDATE contact SET 
nama = '$name',
email = '$email',
phone = '$phone'
WHERE id = $id
";
mysqli_query($conn,$query);

return mysqli_affected_rows( $conn);
}

function registrasi($data){
    global $conn;
    // paksa user untuk tidak menginputkan karakter slash dan mongkonversi ke lowercase
    $username = strtolower(stripslashes($data["username"]));
    // mysqli_real_escape_string untuk otomatis memasukan passowrd dengan tanda kutip
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username udh ada apa blom
   $result= mysqli_query($conn,"SELECT username FROM user WHERE 
    username = '$username'");
    if(mysqli_fetch_assoc($result))
    {
        echo"<script>
        alert('username sudah terdaftar')
        </script>";
        // return false untuk menghentikan fungsi agar tidak lanjut ke proses berikutnya
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2 ){
        echo"<script>
        alert('password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password dengan funcion password_hash dan 2 parameter (apaygmaudienkripsi,algoritma apa yg mau dipake (dalam hal ini algoritma password_default)PHP otomatis mengupdate jika ada algoritma terbaru)
    $password = password_hash($password,PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);

}

?>