<head>
    <style>
        .one{
            text-align: center;
            padding:1.1rem;
        }
        .c{
            text-align: center;
            padding: 1.1rem;
        }
    </style>
</head>
@extends('layouts.app')
@section('title','Create a record:')
@section('content','')
<form action="{{route('posts.store')}}" class='one'method="post">
@csrf
<div class='name'><input type="text" name="title"></div>
@error ('title')
 <div> {{$message}}</div>
@enderror
<div class='c'><textarea name="content"></textarea></div>
@error('content')
<div> {{ $message }}</div>
@enderror
<div><input type="number" name="salary"></div>
<div><input type="submit" value="Create"></div>
@if($errors->any())
<div> <ul>
@foreach($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
 <ul></div>
@endif
</form>
