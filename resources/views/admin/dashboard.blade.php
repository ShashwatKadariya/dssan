@extends('layouts.admin_layout')

@section('content')
    <a href="{{ route('team.index') }}">Team</a>
    <a href="{{ route('feedback.index') }}">Feedback</a>
    <a href="{{ route('batch.index') }}">Batch</a>
    <a href="{{ route('events.index') }}">Events</a>
@endsection
