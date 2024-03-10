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
   <a href="{{ route('datauser.create') }}">Tambah data</a>
   <table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Jenis kelamin</th>
        <th>Email</th>
        <th>Role</th>
        <th>actions</th>
    </tr>
    @foreach ($user as $no => $item)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->role }}</td>
        <td>

        </td>
    </tr> 
    @endforeach
   </table>
</body>
</html>