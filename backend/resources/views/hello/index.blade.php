<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Index</h1>
@isset($msg)
    <p>Hello {{$msg}}!!</p>
@else
    <p>enter your name</p>
@endif
<form method="post" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
</body>
</html>
