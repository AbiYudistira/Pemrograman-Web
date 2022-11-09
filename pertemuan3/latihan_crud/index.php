<?php
// Membuat koneksi database melalui file confic.php dengan include_once
include_once("config.php");
// Mengambil semua data customers dari database
$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Customers</a><br/><br/>
    <table width='80%' border=1></table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Last Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fetch data customers dengan array associative -->
            <?php if($result->num_rows > 0): ?>
                <?php while($customers_data = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td> <?php echo $customers_data['name']?> </td>
                    <td> <?php echo $customers_data['phone']?> </td>
                    <td> <?php echo $customers_data['email']?> </td>
                    <td> <?= $customers_data['created']?> </td>
                    <td> <?= $customers_data['updated']?> </td>
                    <td>
                        <a href='edit.php?id=<?=$customers_data["id"]?>'>Edit</a> | <a href='delete.php?id=<?=$customers_data["id"]?>'>Delete</a>
                    </td>    
                </tr>
            <?php endwhile; ?>
        <?php else : ?>
                <tr>
                    <td colspan="6" rowspan="1" headers="" align="center">Data customers tidak ditemukan!</td>
                </tr>
            <?php endif; ?>

            <?php mysqli_free_result($result); ?>
        </tbody>
    </table>

    <?php if(isset($_GET["message"])){
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$mesaage');";
        echo "window.location='index.php'<script";
    }
    ?>

    
</body>
</html>