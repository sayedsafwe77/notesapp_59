<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table ,tr,td,th{
            border: 1px solid white;
            padding: 25px;
            width: 50%;
        }
        table{
            border-collapse: collapse;
            color: white;
            background: black;
            padding: 25px;
            text-align: center
        }
        td
        {
            width: 25%;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>products</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    {{ $category->product->name }} ,
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
