@extends("layouts.base")

@section("title", "Home")

@section("content")
    @props(['page' => 'home'])

    <x-layout :page='$page'/>
    <x-footer/>
@endsection