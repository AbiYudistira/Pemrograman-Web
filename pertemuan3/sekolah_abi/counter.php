<?php

$connection = mysqli_connect("localhost", "root", "", "sekolah1");

if (!$connection) {
    echo mysqli_connect_error();
}
$query_counting = mysqli_query($connection, "UPDATE tb_counter1 SET counter = counter + 1");
$query_select = mysqli_query($connection, "SELECT counter FROM tb_counter1");
$data = mysqli_fetch_row($query_select);

echo "Anda adalah pengunjung ke- " . $data[0] . " hari ini";

mysqli_close($connection);