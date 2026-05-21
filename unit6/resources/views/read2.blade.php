<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Details of the Students</h2>
    <a href="/abc/create">Add New Student</a>
    <table border="6" cellspacing="7" style="width: 50%; margin-top: 20px;">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="/abc/{{$data1->id}}">Show</a>
                <a href="/abc/{{$data1->id}}/edit">Edit</a>
                <form action="/abc/{{$data1->id}}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>