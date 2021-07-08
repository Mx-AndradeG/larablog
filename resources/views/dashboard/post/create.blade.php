@extends('dashboard.master')
@include('dashboard.partials.validation-error')
@section('content')
        <form action="{{route("post.store")}}" method="POST">
                @include('dashboard.post._form')
        </form>
@endsection