@extends('dashboard.master')
@include('dashboard.partials.validation-error')
@section('content')
        <form action="{{route("post.update",$post->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
        </form>
@endsection