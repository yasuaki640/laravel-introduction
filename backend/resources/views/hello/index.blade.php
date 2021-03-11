<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Index</h1>
<p>{{$msg}}</p>
<form method="post" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
</body>
</html>
