@extends("layouts.base")

@section("title", "Attendance")

@section("content")
    @props(['page' => 'attendance'])

    <x-layout :page='$page'/>
    <x-footer/>                                                 
@endsection