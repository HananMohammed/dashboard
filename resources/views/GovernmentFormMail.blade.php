<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: grey;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <th>name</th>
    <th>message</th>
    </thead>
    <tbody>
    <tr>
        <td>sector Name</td>
        <td>{{$sector_name}}</td>
    </tr>
    <tr>
        <td>email</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>person_name</td>
        <td>{{$person_name}}</td>
    </tr>
    <tr>
        <td>phone</td>
        <td>{{$phone}}</td>
    </tr>
    <tr>
        <td>city</td>
        <td>{{$city}}</td>
    </tr>
    <tr>
        <td>text</td>
        <td>{{$text}}</td>
    </tr>
    @foreach($car_name as $car_name)
    <tr>
        <td>car_name</td>
        <td>{{$car_name}}</td>
    </tr>
@endforeach
    </tbody>
</table>
</body>
</html>