<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" placeholder="Enter your name "> <br><br>
        Email: <input type="email" name="email" placeholder="Enter your email "> <br><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>