<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All teachers</title>
</head>

<body>

    <a href="/form">+Add new teacher</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($data as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>
                    <a href="/edit/{{ $teacher->id }}">Edit</a>
                    <a href="/delete/{{ $teacher->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>