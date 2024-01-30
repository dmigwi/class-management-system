@extends("layouts.base")
@section("title", $account->page)
@section("topbar")
    <x-topbar :role="$account->role" :name="$account->name"/>
@endsection
@section("content")
    <x-layout :account='$account'/>
    <x-footer/>
@endsection