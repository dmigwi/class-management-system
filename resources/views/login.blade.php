@extends("layouts.base", ['account' => null])
@section("title", "Connect")
@section("topbar")
    <x-topbar/>
@endsection
@section("content")
    <x-signin/>
    <x-footer/>
@endsection