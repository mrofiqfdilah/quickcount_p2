<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="hidden" name="role">
        <input type="text" name="name" placeholder="Masukan nama" id=""><br>
        <input type="text" name="nik" placeholder="Masukan nik" id=""><br>
       <select name="jenis_kelamin" id="">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
       </select><br>
       <input type="email" name="email" placeholder="Masukan email" id=""><br>
       <input type="password" name="password" placeholder="Masukan password" id=""><br>
       <button type="submit">submit</button>
    </form>
</body>
</html>