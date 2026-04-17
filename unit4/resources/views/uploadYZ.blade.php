<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/upload-pdf" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"> <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>