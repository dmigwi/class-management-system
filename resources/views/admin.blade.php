@extends("layouts.base")
@section("title", "Admin")
@section("content")
    @props(['page' => 'admin', 'role' => 'admin'])
    <x-layout :page='$page' :role='$role'/>
    <x-footer/>   
@endsection