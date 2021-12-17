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
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>category</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                @if($product->category)
                    <td>{{ $product->category->name }}</td>

                @else
                    <td></td>
                @endif
                <td>{{ $product->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
