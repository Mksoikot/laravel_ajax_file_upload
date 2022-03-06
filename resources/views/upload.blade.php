<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
        <form method="POST" action="{{route('Uploadfile')}}" enctype="multipart/form-data">
            @csrf
            <label for="file">Choose File</label>
            <input type="file" name="file">
            <button type="submit" name="submit">upload</button>
        </form>
</body>
</html>
