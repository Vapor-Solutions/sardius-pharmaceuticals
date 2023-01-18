@extends('layouts.front')


@section('content')
    <x-banner url="/rev/assets/2-51.jpg">
        <x-slot name="title">Gallery</x-slot>
    </x-banner>

    <x-gallery-list></x-gallery-list>
@endsection
