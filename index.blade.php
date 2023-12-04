<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>api</title>
</head>
<div>

<a class="btn btn-danger mb-2" href="{{url('logout')}}" role="button">Logout</a>

</div>

<body class="m-5">
    <table class="table table-hover table-dark">

        <thead>
            <tr>
                <th scope="col">Quote</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$quote['quote']}}</th>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{url('index')}}" role="button">Refresh</a>
</body>

</html>


