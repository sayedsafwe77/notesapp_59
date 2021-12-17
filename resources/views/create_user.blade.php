<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        {{-- crud operation create read update delete --}}
       <tr>
           <th>name</th>
           <th>email</th>
           <th>password</th>
           <th>action</th>
       </tr>
       <tr>
           <form action="{{ route('store.user') }}" method="post">
                @csrf
                <td><input type="text" placeholder="name" name="name"></td>
                <td><input type="email" placeholder="email" name="email"></td>
                <td><input type="password" placeholder="password" name="password"></td>
                <td><input type="submit" value="save"></td>
           </form>
       </tr>
    </table>

</body>
</html>
