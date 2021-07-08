@extends('dashboard.master')
@include('dashboard.partials.validation-error')
@section('content')
        <form action="{{route("category.update",$category->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
        </form>
@endsection