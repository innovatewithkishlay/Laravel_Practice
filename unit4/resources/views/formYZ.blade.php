<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/submit">
        @csrf
        <label>Name: </label>
        <input type="text" name="name" value="{{old('name')}}> <br><br>
        @error('name')
            <div style="color:red">{{$message}}</div>
        @enderror
        <label>Email: </label>
        <input type="email" name="email" value="{{old('email')}}"> <br><br>
         @error('email')
            <div style="color:red">{{$message}}</div>
        @enderror
        <label>Phone: </label>
        <input type="number" name="phone" value="{{old('phone')}}"> <br><br>
        @error('phone')
                <div style="color:red">{{$message}}</div>   
        @enderror
        <input type="submit" value="submit">
    </form>
</body>
</html>