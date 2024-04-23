@extends('layouts.app')
@section('title', $blog['title'])
@section('header')
<h1>{{$blog['main']}}</h1>
<h2>{{$blog['content']}}</h2>
@endsection
@section('footer')
