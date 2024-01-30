@extends("layouts.base")
@section("title", "Chat")
@section("content")
   @props(['page' => 'chat', 'role' => 'lecturer'])
   <x-layout :page='$page' :role='$role'/>
   <x-footer/>
@endsection