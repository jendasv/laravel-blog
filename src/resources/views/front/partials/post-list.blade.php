<!-- Blok článků -->
<div class="space-y-6">

    @forelse($posts as $post)


        <a href="{{ route('post.show', ['locale' => app()->getLocale(), 'slug' => 'my-first-post']) }}" class="block">
            <article class="flex flex-col md:flex-row bg-white shadow rounded overflow-hidden">
                <!-- Obrázek -->
                <div class="md:w-1/3 bg-blue-200 h-40 md:h-auto"></div>

                <!-- Textový obsah -->
                <div class="md:w-2/3 p-6 flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2"> {{$post->translation->title}}</h2>
                        <p class="text-sm text-gray-500 mb-4">26.2.2026 &bull; Jan Svoboda</p>
                        <p class="text-gray-700">
                            {{$post->translation->content}}
                        </p>
                    </div>
                </div>
            </article>
        </a>
    @empty
        <p>NIC</p>
    @endforelse
{{--    @include('front.posts.post-preview')--}}
    <!-- Článek 1 -->


    <!-- Článek 2 -->
{{--    <a href="{{ route('post.show', ['locale' => app()->getLocale(), 'slug' => 2]) }}" class="block">--}}
{{--    <article class="flex flex-col md:flex-row bg-white shadow rounded overflow-hidden">--}}
{{--        <!-- Obrázek -->--}}
{{--        <div class="md:w-1/3 bg-green-200 h-40 md:h-auto"></div>--}}

{{--        <!-- Textový obsah -->--}}
{{--        <div class="md:w-2/3 p-6 flex flex-col justify-between">--}}
{{--            <div>--}}
{{--                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Druhý článek na blogu</h2>--}}
{{--                <p class="text-sm text-gray-500 mb-4">25.2.2026 &bull; Jan Svoboda</p>--}}
{{--                <p class="text-gray-700">--}}
{{--                    Krátký úvod druhého článku. Opět zde může být teaser, pár vět nebo shrnutí obsahu.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </article>--}}
{{--    </a>--}}
</div>
