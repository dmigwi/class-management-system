@extends("layouts.base")
@section("title", "Chat")
@section("content")
   @props(['page' => 'chat', 'role' => 'student'])
   <x-layout :page='$page' :role='$role'/>
   <x-footer/>
@endsection