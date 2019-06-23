<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGE 1</title>
</head>

<body>
    <h1>CREATE PAGE</h1>
    
    <br>
    <br><br><br>
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <br><br>
        <label for="alamat">alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="SABMIDH">
    </form>
</body>

</html>