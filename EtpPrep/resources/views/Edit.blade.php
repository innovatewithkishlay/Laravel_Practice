<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>Edit Teacher Data</h1>
    <form action="/update/{{ $data1->id }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ $data1->name }}">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $data1->email }}">
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>