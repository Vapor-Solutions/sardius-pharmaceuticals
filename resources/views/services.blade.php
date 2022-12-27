@extends('layouts.app')


@section('content')
<x-banner url="/rev/assets/2-6.jpg">
    <x-slot name="title">Our Services</x-slot>
</x-banner>
<x-services.our-services></x-services.our-services>

@endsection
