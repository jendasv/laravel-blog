@extends('admin.base-admin')

@section('title', 'Login')

@section('layout')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        {{--<div class="bg-white shadow-lg rounded-lg max-w-md p-8">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Admin Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @method('POST')
                <x-forms.input
                    name="email"
                    type="email"
                    label="Email"
                    :value="old('email')"
                    :error="$errors->first('email')"
                    required
                    autofocus />

                <x-forms.input
                    name="password"
                    type="password"
                    label="Heslo"
                    :error="$errors->first('password')"
                    required />

                <x-forms.checkbox
                    name="remember"
                    label="Remember me"
                    :error="$errors->first('remember')" />

                <x-forms.singleSubmit
                    label="Login"
                    :error="$errors->first('submit')" />

                @if(session('error'))
                    <p class="text-red-500 text-center text-sm">{{ session('error') }}</p>
                @endif
            </form>
        </div>--}}
        <x-forms.form-layout
            title="Admin Login"
            action="{{ route('login') }}"
            method="POST"
            singleButton="true"
            submitLabel="Login"
            displayErrors="true"
            classes="bg-white shadow-lg rounded-lg max-w-md p-8"
            >
            <x-forms.input
                name="email"
                type="email"
                label="Email"
                :value="old('email')"
                :error="$errors->first('email')"
                required
                autofocus />

            {{-- Password --}}
            <x-forms.input
                name="password"
                type="password"
                label="Heslo"
                :error="$errors->first('password')"
                required />

            {{-- Zapamatovat si --}}
            <x-forms.checkbox
                name="remember"
                label="Remember me"
                :error="$errors->first('remember')" />
        </x-forms.form-layout>
    </div>
@endsection
