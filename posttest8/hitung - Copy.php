<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if nilai_mk array is set and not empty
    if (isset($_POST["nilaiMatkul"]) && !empty($_POST["nilaiMatkul"])) {
        // Calculate IPK
        $nilai_mk = $_POST["nilaiMatkul"];
        $total_nilai = array_sum($nilai_mk);
        $jumlah_mk = count($nilai_mk);        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
    <h1>Status Kelulusan</h1>
    <?php 
    // Avoid division by zero
    if ($jumlah_mk > 0) {
        $ipk = $total_nilai / $jumlah_mk;

        $status_lulus = ($ipk > 2.00) ? "Lulus" : "Tidak Lulus";

        // Display the result
        echo "<h3>IPK Anda adalah: " . number_format($ipk, 2) . "</h3>";
        echo "<h3>Status Kelulusan: " . $status_lulus . "</h3>";
        echo "<a href='index.php'>kembali</a>";
    } else {
        echo "Tidak ada nilai mata kuliah yang diinput.";
    }
} else {
    echo "Tidak ada nilai mata kuliah yang diinput.";
}
} else {
// Redirect if accessed directly
header("Location: index.html");
exit();
}
     ?>
</body>
</html>       
        
