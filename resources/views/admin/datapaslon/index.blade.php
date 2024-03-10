<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('datauser.index') }}">Data User</a></li>
        <li><a href="{{ route('datapaslon.index') }}">Data Paslon</a></li>
    </ul>
   <a href="{{ route('datapaslon.create') }}">Tambah data</a>
   <table border="1">
    <tr>
        <th>No</th>
        <th>No Urut</th>
        <th>Nama</th>
        <th>Visi</th>
        <th>Misi</th>
        <th>Foto</th>
        <th>actions</th>
    </tr>
    @foreach ($paslon as $no => $item)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $item->nourut }}</td>
        <td>{{ $item->nama_lengkap }}</td>
        <td>{{ $item->visi }}</td>
        <td>{{ $item->misi }}</td>
        <td><img src="{{ $item->gambar }}" alt=""></td>
        <td>
        </td>
    </tr> 
    @endforeach
   </table>
</body>
</html>