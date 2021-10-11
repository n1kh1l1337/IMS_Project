@extends('layouts.master')
@section('page_title', 'My Dashboard')

@section('content')
    <h2>Welcome {{ Auth::user()->name }}. That's your Dashboard. </h2>
    @endsection
