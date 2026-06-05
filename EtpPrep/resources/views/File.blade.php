<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/fileupload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose File</label>
        <input type="file" name="file" id="file"><br><br>
        @error('file')
            <p style="color:red">{{ $message }}</p>
        @enderror
        <button type="submit">Upload</button>
    </form>
</body>

</html>