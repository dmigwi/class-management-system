@extends("layouts.base")
@section("title", $account->page ?? null)
@section("topbar")
    <x-topbar />
@endsection
@section("content")
    @auth
        <x-layout :account='$account ?? null' :users='$users ?? []' :units='$units ?? []' :conversation='$conversation ?? []'/>
    @endauth
    <x-footer/>
@endsection
