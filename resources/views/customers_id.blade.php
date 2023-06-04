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
<br>
<table border="1">
    <thead>
    <tr>
        <th witdh = 10%>ID</th>
        <th>Address name</th>
        <th>City</th>
        <th>Street</th>
        <th>Building</th>
        <th>Floor</th>
        <th>Flat</th>
        <th>Intercom code</th>
        <th>Addition date</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($addresses as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->address_name}}</td>
            <td>{{$row->city}}</td>
            <td>{{$row->street}}</td>
            <td>{{$row->house}}</td>
            <td>{{$row->floor}}</td>
            <td>{{$row->flat}}</td>
            <td>{{$row->intercom_code}}</td>
            <td>{{$row->add_time}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div >

</div>
</body>
</html>
