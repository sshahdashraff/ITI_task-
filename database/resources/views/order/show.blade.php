<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>
            order
        </legend>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>price</th>
                </tr>
            </thead>
            <br>


            <tbody>

                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->price}}</td>
                </tr>

            </tbody>
        </table>
    </fieldset>

    <br>
    <br>
    <br>
    <fieldset>
        <legend>
            User
        </legend>
        <table>
            <thead>
                <tr>
                    <th>
                        user Name
                    </th>

                </tr>
            </thead>
            <br>

            <br>
            <tbody style="text-align: center;">

                <tr>
                    <div>

                        <td>{{ $order->user->name}}</td>
                    </div>
                </tr>

            </tbody>
        </table>
    </fieldset>
</body>



</html>