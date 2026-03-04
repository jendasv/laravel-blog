@extends('admin.layout')

@section('header', "User edit {$user->id}")

@section('content')
    {{--<div class="max-w-2xl mx-auto bg-white shadow rounded-2xl p-8">

        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')

             --}}{{--<!--Name-->--}}{{--
            <x-forms.input
                name="name"
                label="Name"
                value="{{ old('name', $user->name) }}"
                placeholder="Type your name"
            />

            <x-forms.input
                name="second_name"
                label="Second Name"
                value="{{ old('second_name', $user->second_name) }}"
            />

            <x-forms.input
                name="email"
                label="Email"
                value="{{ old('email', $user->email) }}"
                />

            <x-forms.select
                name="role"
                label="Role"
                :options="['user', 'editor', 'admin']"
                :value="$user->role"
            />

            <x-forms.input
                name="password"
                label="New Password (optional)"
                type="password"
            />

            <x-forms.buttons
                :back-url="route('admin.users.index')"
                :submit-text="'Save Changes'"
                />
        </form>
    </div>--}}
    <x-forms.form-layout
        title=""
        action="{{ route('admin.users.update', $user) }}"
        method="PUT"
        submit="Vytvořit">
        {{-- Name --}}
        <x-forms.input
            name="name"
            label="Name"
            value="{{ old('name', $user->name) }}"
            placeholder="Type your name"
        />

        {{-- Second Name --}}
        <x-forms.input
            name="second_name"
            label="Second Name"
            value="{{ old('second_name', $user->second_name) }}"
        />

        {{-- Email --}}
        <x-forms.input
            name="email"
            label="Email"
            value="{{ old('email', $user->email) }}"
        />

        {{-- Role --}}
        <x-forms.select
            name="role"
            label="Role"
            :options="['user', 'editor', 'admin']"
            :value="$user->role"
        />

        {{-- Password --}}
        <x-forms.input
            name="password"
            label="New Password (optional)"
            type="password"
        />
    </x-forms.form-layout>
@endsection
