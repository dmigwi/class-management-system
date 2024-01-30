@extends("layouts.base")
@section("title", "Home")
@section("content")
    @props(['page' => 'home', 'role' => 'student'])
    <x-layout :page='$page' :role='$role'/>
    <x-footer/>
@endsection