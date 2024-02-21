@extends("layouts.base")
@section("title", $account->page ?? null)
@section("topbar")
    <x-topbar />
@endsection
@section("content")
    @auth
        <x-layout :account='$account ?? null' :units='$units ?? null'/>
    @endauth
    <x-footer/>
@endsection
