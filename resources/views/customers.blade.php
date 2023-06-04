<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<form action="{{ route("customers") }}" method="get">
    <label for="is_blocked">Is blocked:</label>
    <input type="text" name="is_blocked" id="is_blocked" value="{{ request("is_blocked") }}" />
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ request("email") }}" />
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="{{ request("phone") }}" />
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ request("name") }}">
    <br>
    <button type="submit">Filter</button>
</form>

<table border="1">
    <thead>
    <tr>
        <th witdh = 10%>ID</th>
        <th>Name</th>
        <th>Is blocked</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Registration date</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($customers as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->is_blocked}}</td>
            <td>{{$row->surname}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->registration_date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div >
    {{ $customers->links("pagination::bootstrap-4") }}
</div>
</body>
</html>
