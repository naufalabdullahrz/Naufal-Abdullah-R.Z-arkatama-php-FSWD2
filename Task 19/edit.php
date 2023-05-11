<?php
$conn = mysqli_connect('127.0.0.1:3306','root','','sinauo');
$id = $_GET["id"];
$sid = mysqli_query($conn,"SELECT * FROM users WHERE id ='$id'");
$arrayid = mysqli_fetch_array($sid);
if (isset($_POST["submit"])){

    $nama = isset($_POST["nama"]) ? $_POST["nama"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';
    $avatarfile = $_FILES['avatar']['name'];
    $tmpavatar = $_FILES['avatar']['tmp_name'];
    $dirUpload = "images/";
    $terupload = move_uploaded_file($tmpavatar, $dirUpload.$avatarfile);

    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $role = isset($_POST["role"]) ? $_POST["role"] : '';
    var_dump($_REQUEST);
    $sql = mysqli_query($conn,"UPDATE users SET email='$email',name='$nama',role='$role',avatar='$avatarfile',phone='$phone',address='$address',password='$password' WHERE id='$id'");
    header("location:tabeluser.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Input Form</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST" action="">
        <h1>Edit User</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="nama">Nama</span>
            <input type="text" class="form-control" value="<?php echo $arrayid['name']?>"  placeholder="Nama" name="nama">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="avatar">Avatar</label>
            <input type="file" class="form-control" name="avatar">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" for="email" value="<?php echo $arrayid['email']?>" name="email">
            <span class="input-group-text"  name="email">@gmail.com</span>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="password">Password</span>
            <input type="password" class="form-control" placeholder="password" value="<?php echo $arrayid['password']?>" name="password">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="phone">Phone</span>
            <input type="number" class="form-control" placeholder="phone" value="<?php echo $arrayid['phone']?>" name="phone">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="address">Address</span>
            <input type="text" class="form-control" placeholder="Address" value="<?php echo $arrayid['address']?>" name="address">
        </div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="role">Role</label>
        <select class="form-select" name="role">
            <option selected>Pilih Role</option>
            <option value="staff"<?php if($arrayid['role']=='staff'){ echo 'selected'; }?>>Staff</option>
            <option value="admin"<?php if($arrayid['role']=='admin'){ echo 'selected'; }?>>Admin</option>
        </select>
        </div>
        <button type='submit' name="submit" class="btn btn-success">Tambah</button>
    </form>
</body>
</html>