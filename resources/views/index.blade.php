<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Index View</title>
</head>
<body>
    <!-- practice laravel -->
    <h1>Halaman Index View</h1>
    @if(count($posts)>0)
        <ul>
            @foreach($posts as $post)
            <!-- <li>{{ $post['title'] }}</li> -->
            <a href="{{ route('post.show', $post['id']) }}"><li>{{ $post['title'] }}</li></a>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data</p>
    @endif
</body>
</html>