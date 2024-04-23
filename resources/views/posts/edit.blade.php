<head>
    <style>
        .name{
            text-align: center;
            padding:1.1rem;
        }
        .c{
            text-align: center;
        }
    </style>
</head>
@extends('layouts.app')
@section('title','Update a record:')
@section('content','')
<form action="{{route('posts.update',['post'=>$post->id])}}" method="post">
<!-- @csrf
<div class='name'><input type="text" name="title"></div>
<div class='c'><textarea name="content"></textarea></div>
<div><input type="number" name="salary"></div>
<div><input type="submit" value="Create"></div> -->
@csrf
@method('PUT')
@include('posts.partials.form')
<div><input type="submit" value="Create"></div>
</form>
