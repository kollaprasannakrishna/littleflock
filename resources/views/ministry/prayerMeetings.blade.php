@extends('layouts.main')

@section('title','| Sunday Service')

@section('content')
    @include('ministry.prayerMeetings.header')
    @include('ministry.prayerMeetings.content')
@endsection