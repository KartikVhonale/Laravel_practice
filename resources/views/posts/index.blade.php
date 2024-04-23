@extends('layouts.app')
@section('title','Blog Posts')
@section('content')
@foreach($posts as $post)
<div>{{$post['title']}}</div>
<div>{{$post['content']}}</div>
@endforeach
@endsection