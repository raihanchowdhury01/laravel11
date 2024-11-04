<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    user
    {{-- <form action="{{ route('bkash-create-payment') }}" method="POST">
        <div>
            <label for="amount">Amount</label><br>
            <input type="number" name="amount" id=""><br>
            <input type="submit" value="Submit">
        </div>
    </form> --}}
    <a href="{{ route('bkash-create-payment') }}">Payment</a>

</body>
</html>