<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <h2>User Type: <span style="color: red"> {{ session('type') }}</span>  </h2>
    <a href="/home/create">Create user</a> |
    <a href="/home/userlist">View user list</a> |
    <a href="/logout">logout</a>
    <br>
    <h1 style="color: red ">
        {{session('msg')}}
    </h1>
    
</body>
</html>
