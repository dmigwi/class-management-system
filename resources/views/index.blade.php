@extends("layouts.base")
<<<<<<< HEAD
@section("title", $account->page)
@section("topbar")
    <x-topbar :role="$account->role" :name="$account->name"/>
@endsection
@section("content")
    <x-layout :account='$account'/>
=======
@section("title", "Home")
@section("content")
    @props(['page' => 'home'])
    <x-layout :page='$page'/>
>>>>>>> e2b9d1f (Format the tags alignment)
    <x-footer/>
@endsection