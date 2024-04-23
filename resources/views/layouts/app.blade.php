<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>@yield('title')</title>
<style>
body{
margin:0;
}
.navbar{
height:1rem;
background-color:black;
color:white;
}
.navbar ul li{
list-style-type: none;
display:inline-block;
}
.header{
font-size:2rem;
}
</style>
</head>
<body>
<div class="navbar">
<ul>
<li><a
href="/blogs/home">Home</a></li>
<li><a
href="/blogs/posts">Posts</a></li>
<li><a
href="/blogs/about">About</a></li>
</ul>
</div>
<div class="header">
@yield('content')
</div>
</body>
</html>
