@extends("layouts.base")
@section("title", "Attendance")
@section("content")
    @props(['page' => 'attendance', 'role' => 'lecturer'])
    <x-layout :page='$page' :role='$role'/>
    <x-footer/>                                                 
@endsection