@extends('layouts.admin_layout')

@section('content')
    <a href="{{ route('team.index') }}">Team</a>
    <a href="{{ route('fact.index') }}">Fact</a>
@endsection
