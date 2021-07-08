@extends('dashboard.master')
@include('dashboard.partials.validation-error')
@section('content')
        <form action="{{route("category.store")}}" method="POST">
                @include('dashboard.category._form')
        </form>
@endsection