@extends("layouts.base")
@section("title", $account->page ?? null)
@section("topbar")
    <x-topbar :role="$account->role ?? null" :name="$account->name ?? null"/>
@endsection
@section("content")
    <x-layout :account='$account ?? null' :units='$units ?? null'/>
    <x-footer/>
@endsection
