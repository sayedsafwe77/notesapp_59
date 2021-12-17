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
        }
        table{
            border-collapse: collapse;
            color: white;
            background: black;
            padding: 25px;
            text-align: center;
            width:70%;

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
                <th>price</th>
                <th>user name</th>
                <th>product name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->price }}</td>
                <td>
                    {{ $invoice->user->name }}
                </td>
                <td>
                    @foreach ($invoice->products as $product )
                        {{ $product->name }} ,
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
