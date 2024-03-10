<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login') }}" method="post">
        @csrf
       <input type="email" name="email" placeholder="Masukan email" id=""><br>
       <input type="password" name="password" placeholder="Masukan password" id=""><br>
       <button type="submit">submit</button>
    </form>
</body>
</html>