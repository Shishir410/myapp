@extends('dashboard.nab_and_side')

@section('body')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <h2 style="text-align:center;">User Table</h2>
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

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        create{padding: 10px;
            margin:10%;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>E_mail</th>
                <th>Join_Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->position}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->join_date}}</td>
                <td>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

@endsection

