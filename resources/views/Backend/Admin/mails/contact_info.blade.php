<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $msgDetails->subject }}</title>
</head>
<body>
        <h3>Name:- {{ $msgDetails->name }}</h3>
        <br>
        <h3>Email:- {{ $msgDetails->email }}</h3>
        <br>
        <h3>Phone:- {{ $msgDetails->phone_number }}</h3>
        <br>
        <p>Subject:- {{ $msgDetails->subject }}</p>
        <br>
        <p>Message:- {{ $msgDetails->message }}</p>
</body>
</html>