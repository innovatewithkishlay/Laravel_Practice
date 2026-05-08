<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="3">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edite</th>
                <th>Delete</th>
            </tr>
            <tr>
                @if($data->isEmpty())
                <td colspan="5">No data found</td>
                @endif
                @foreach($data as $data)
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="/edit/{{$data->id}}">Edit</a></td>
                <td><a href="/delete/{{$data->id}}">Delete</a></td>
                @endforeach

            </tr>
        </table>
    </div>
</body>
</html>