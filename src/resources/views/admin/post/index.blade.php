@extends('admin.layout')

@section('header', 'Posts')

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
                    <th class="px-4 py-2 text-left">Slug</th>
                    <th class="px-4 py-2 text-left">Autor</th>
                    <th class="px-4 py-2 text-left">Created</th>
                    <th class="px-4 py-2 w-10 text-center">Edit</th>
                    <th class="px-4 py-2 w-10 text-center">Delete</th>
                </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                <!-- Row 1 -->
                @foreach($posts as $post)

                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-2 text-center">
                        <input type="checkbox" class="cursor-pointer">
                    </td>
                    <td class="px-4 py-2">{{$post->slug}}</td>
                    <td class="px-4 py-2">Jan Svoboda</td>
                    <td class="px-4 py-2">{{$post->created_at}}</td>
                    <td class="px-4 py-2 text-center">
                        <!-- edit icon -->
                        <a href="#" class="text-gray-500 hover:text-gray-700">
                            ✎
                        </a>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <!-- delete icon -->
                        <a href="" class="text-red-500 hover:text-red-700">
                            🗑
                        </a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="6" class="min-h-full px-4 py-2 text-center">
                        @if($posts->links())
                        {{$posts->links()}}
                        @else
                        &nbsp;
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
            <br>

        </div>

    </div>
@endsection
