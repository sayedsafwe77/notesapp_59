<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table
        {
            border-collapse: collapse;
        }
        table , tr,th,td{
            border: 1px solid black;
            padding: 20px;
        }
        #create-button{
            text-decoration: none;
            padding: 10px;
            background: green;
            border: 2px solid black;
            margin-top: 30px;
            color: white
        }
    </style>
</head>
<body>
    <table>
         {{-- crud operation create read update delete --}}
         <thead>
             <tr>
                 <th>id</th>
                 <th>name</th>
                 <th>email</th>
                 <th>delete</th>
                 <th>update</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td ><a href="{{ route('destroy.user',$user->id) }}"><button>delete</button></a> </td>
                <td ><a href="{{ route('update.user',$user->id) }}"><button>update</button></a> </td>
                <td ><a href="{{ route('show.user',$user->id) }}"><button>more details</button></a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a id="create-button" href="{{ route('create.user') }}">create user</a>

</body>
</html>
