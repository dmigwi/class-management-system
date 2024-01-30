@extends("layouts.base")
@section("title", $account->page)
@section("topbar")
    <x-topbar :role="$account->role" :name="$account->name"/>
@endsection
@section("content")
    @props(['page' => 'home', 'role' => 'student'])
    <x-layout :page='$page' :role='$role'/>
    <x-footer/>
@endsection