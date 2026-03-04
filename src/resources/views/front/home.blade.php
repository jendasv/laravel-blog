@extends('front.base')

@section('title', 'Welcome Home')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{__('messages.welcome')}}</h1>
    @include('front.partials.post-list')
    <div id="app"></div>
@endsection
