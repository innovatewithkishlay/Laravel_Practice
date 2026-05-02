<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
        <br><br>
        @error('name')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <input type="text" name="email" placeholder="Enter your email:" value="{{old('email')}}">
        <br> <br>
        @error('email')
        <p style="color:red">{{$message}}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>