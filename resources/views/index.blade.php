@extends('layouts.master')

@section('title', 'Blog  Posts')

@section('content')
    <!-- <h1>{{$index['title']}}</h1>
    <p>{{$index['content']}}</p> -->

@foreach($post as $posts)
<div>(($posts['title']))</div>
@endforeach
@endsection