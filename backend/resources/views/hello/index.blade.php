<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>&commat;ディレクティブの例</p>
@foreach($data as $item)
    @if($loop->first)
        <p>データ一覧</p>
        <ul>
            @endif
            <li>No,{{$loop->iteration}}. {{$item}}</li>
            @if($loop->last)
        </ul>
        <p>---ここまで</p>
    @endif
@endforeach
</body>
</html>
