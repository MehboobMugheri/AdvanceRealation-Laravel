<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance Relations</title>
</head>
<body>
   <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country Name</th>
    </tr>
    @foreach ($users as $user )
   <tr>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->country->country_name }}</li>
   </tr>
@endforeach
   </table>
</body>
</html>