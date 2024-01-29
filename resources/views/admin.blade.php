@extends("layouts.base")
@section("title", "Admin")
@section("content")
    @props(['page' => 'admin'])
    <x-layout :page='$page'/>
    <x-footer/>   
@endsection