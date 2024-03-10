<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('datapaslon.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="number" name="nourut" placeholder="Masukan no urut" id=""><br>
    <input type="text" name="nama_lengkap" placeholder="Masukan nama lengkap" id=""><br>
    <textarea name="visi" id="" cols="30" rows="10"></textarea><br>
    <textarea name="misi" id="" cols="30" rows="10"></textarea><br>
    <input type="file" name="gambar" id=""><br>
    <button type="submit">submit</button>
    </form>
</body>
</html>