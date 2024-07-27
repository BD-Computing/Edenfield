@extends('layouts.web')

@section('title')
    Room Details
@endsection
@section('content')
    @livewire('rooms.view-room', ['roomTypeID' => $id])
@endsection
