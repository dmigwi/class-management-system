@extends("layouts.base")
@section("title", "Chat")
@section("content")
   @props(['page' => 'chat'])
   <x-layout :page='$page'/>
   <x-footer/>
@endsection