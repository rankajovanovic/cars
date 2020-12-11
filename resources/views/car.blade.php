@extends('layouts.app')

@section('title', 'Car {{$car->title}}')
@section('content')
    <p class="">Car: {{$car->title}}</p>
    <p>Producer: {{$car->producer}}</p>
    <p>Number of doors: {{$car->number_of_doors}}</p>
@endsection