<html>
<head>
    <title>Add Customer</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.process.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

</body>
</html>

<?php
//Cek jika form telah di submit, kemudian memasukkan data dari form ke customers tabel.
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    //Membuat koneksi ke database menggunakan file config.php dengan include_once
    include_once("config.php");

    //Memasukkan data customers ke tabel customers
    // $conn_db berasal dari config.php
    $result = mysqli_query($conn_db, "INSERT INTO customers(name,email,phone,created)VALUES('$name','$email','$phone','$created')");

    //Menampilkan pesan ketika customers telah ditambah
    echo "Customer ". $name ." added succesfully. <a href='index.php'>View Customers</a>";
}
?>