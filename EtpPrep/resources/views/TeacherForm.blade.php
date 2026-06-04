<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Form</title>
</head>

<body>
    <h2>Teacher Form </h2>
    <form method="POST" action="/insert">
        @csrf
        <label>Name: </label>
        <input type="text" name="name" placeholder="Enter you   r name" />
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" />
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>