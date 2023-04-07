@extends('layouts.admin_layout')

@section('content')
    <p>{{ Auth::user()->name }}</p>
    <a href="{{ route('team.index') }}">Team</a>
    <a href="{{ route('feedback.index') }}">Feedback</a>
    <a href="{{ route('batch.index') }}">Batch</a>
    <a href="{{ route('events.index') }}">Events</a>
    <a href="{{ route('news.index') }}">News</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @if (Auth::user()->role == 'Admin')
        <a href="/user/register">Register</a>
    @endif
    <a href="/user/update-password">Update Password</a>
@endsection
