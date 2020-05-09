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
          <!--identical-->
        <td>Company Name</td>
        <td>{{$company_name}}</td>
    </tr>
    @if($company_activity)
    <tr>

        <td>Company Activity</td>
        <td>{{$company_activity}}</td>
    </tr>
    @endif
    @if($dealing_banks)
    <tr>

        <td>Dealing Banks</td>
        <td>{{$dealing_banks}}</td>
    </tr>
    @endif
    <tr>
        <!--identical-->
        <td>Phone Number</td>
        <td>{{$phone_number}}</td>
    </tr>
    <tr>
        <!--identical-->
        <td>City</td>
        <td>{{$city}}</td>
    </tr>
    @if($age_of_company)
    <tr>
        <td>age of company</td>
        <td>{{$age_of_company}}</td>
    </tr>
    @endif
    @if($responsible_person_name)
    <tr>
        <td>responsible person name</td>
        <td>{{$responsible_person_name}}</td>
    </tr>
    @endif
    @if($commercial_registration_no)
        <tr>
            <td> Commercial Registration Number </td>
            <td>{{$commercial_registration_no}}</td>
        </tr>
    @endif

    @if($email)
    <tr>
        <td>email</td>
        <td>{{$email}}</td>
    </tr>
    @endif
    @foreach($car_id as $id)
    <tr>

        <td>car_id</td>

        <td>{{$id}}</td>
    </tr>
    @endforeach
    <tr>
    @foreach($car_name as $name)
        <tr>

            <td>Car Name</td>

            <td>{{$name}}</td>
        </tr>
    @endforeach
    <!--  identical -->
    <tr>

        <td>text</td>
        <td>{{$text}}</td>
    </tr>
{{--    <tr>--}}
{{--        <td>commercial registration number</td>--}}
{{--        <td>{{$commercial_registration_no}}</td>--}}
{{--    </tr>--}}

    </tbody>
</table>
</body>
</html>