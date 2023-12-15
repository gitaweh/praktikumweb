<?php



?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Pendataan Penduduk</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1> PENDUDUK </h1>
    <form action="{{ route('submit-data') }}" method="post">
        @csrf
        NIK:<input type="text" name="NIK"><br>
        Nama:<input type="text" name="Nama"><br>
        Provinsi:<input type="text" name="Provinsi"><br>
        Kota:<input type="text" name="Kota"><br>
        Nomor Telepon:<input type="text" name="Nomor"><br>
        <input type="submit">
    </form>
</body>
</html>