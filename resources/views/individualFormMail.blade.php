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
        <td> Name</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <!--identical-->
        <td>City</td>
        <td>{{$city}}</td>
    </tr>
    <tr>
        <!--identical-->
        <td>Phone Number</td>
        <td>{{$phone_number}}</td>
    </tr>
    <tr>
        <!--identical-->
        <td>Nationalityr</td>
        <td>{{$nationality}}</td>
    </tr>
    @if($select_work_selector)
        <tr>

            <td> work selector</td>
            <td>{{$select_work_selector}}</td>
        </tr>
    @endif
    @if($salary_transferring_bank)
        <tr>

            <td>salary transferring bank</td>
            <td>{{$salary_transferring_bank}}</td>
        </tr>
    @endif


    @if($select_monthly_obligations)
        <tr>
            <td>select monthly obligations</td>
            <td>{{$select_monthly_obligations}}</td>
        </tr>
    @endif
    @if($years_of_experience)
        <tr>
            <td>years of experience</td>
            <td>{{$years_of_experience}}</td>
        </tr>
    @endif
    @if($monthly_salary)
        <tr>
            <td> monthly salary </td>
            <td>{{$monthly_salary}}</td>
        </tr>
    @endif
    @if($total_monthly_obligations)
        <tr>
            <td> total monthly obligations </td>
            <td>{{$total_monthly_obligations}}</td>
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