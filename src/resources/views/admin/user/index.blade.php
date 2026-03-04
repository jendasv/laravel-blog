@extends('admin.layout')

@section('header', 'Users')

@section('content')
    <div class="p-8 bg-gray-50">

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded shadow-sm">
                <!-- Table Head -->
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                <tr>
                    <th class="px-4 py-2 w-10">
                        <!-- Checkbox header -->
                        <input type="checkbox" class="cursor-pointer">
                    </th>
                    <th class="px-4 py-2 w-10 text-center">Id</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Second Name</th>
                    <th class="px-4 py-2 text-left">Role</th>
                    <th class="px-4 py-2 text-left">Created</th>
                    <th class="px-4 py-2 text-left">Changed</th>
                    <th class="px-4 py-2 w-10 text-center"></th>
                    <th class="px-4 py-2 w-10 text-center"></th>
                </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                <!-- Row 1 -->
                @foreach($users as $user)

                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-2 text-center">
                            <input type="checkbox" class="cursor-pointer">
                        </td>
                        <td class="px-4 py-2">{{$user->id}}</td>
                        <td class="px-4 py-2">{{$user->name}}</td>
                        <td class="px-4 py-2">{{$user->second_name}}</td>
                        <td class="px-4 py-2">{{$user->role}}</td>
                        <td class="px-4 py-2">{{$user->created_at}}</td>
                        <td class="px-4 py-2">{{$user->updated_at}}</td>
                        <td class="px-4 py-2 text-center">
                            <!-- edit icon -->
                            @if(auth()->user()->id === $user->id ||  auth()->user()->isAdmin())
                            <a href="{{route('admin.users.edit', $user)}}" class="text-gray-500 hover:text-gray-700">
                                ✎
                            </a>
                            @endif
                        </td>
                        <td class="px-4 py-2 text-center">
                            <!-- delete icon -->
                            @if(auth()->user()->isAdmin() && auth()->user()->id !== $user->id) @endif
                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
                                      onsubmit="return confirm('Opravdu chcete smazat tohoto uživatele?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                        🗑
                                    </button>
                                </form>

                            {{--@endif--}}


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>

        </div>

    </div>
@endsection
