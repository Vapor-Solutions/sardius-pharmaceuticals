@extends('layouts.app')


@section('content')
<x-banner url="/rev/assets/1-6.jpg">
    <x-slot name="title">About Us</x-slot>
</x-banner>
<x-about.about-us></x-about.about-us>
<x-services-list></x-services-list>

@endsection
