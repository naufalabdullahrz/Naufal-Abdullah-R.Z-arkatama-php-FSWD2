<?php
insertDataCategories(12, 'Kategori 12', '2023-05-06 09:30:00', '2023-05-06 09:30:00');

function insertDataCategories($id, $name, $created_at, $updated_at){
    $koneksi = mysqli_connect("localhost", "root", "", "sinauo");

    $sql = mysqli_query($koneksi, "insert into categories (id, name, created_at, updated_at) values ('$id', '$name', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

?>