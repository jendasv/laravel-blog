<a href="{{ route('post.show', ['locale' => app()->getLocale(), 'slug' => 'my-first-post']) }}" class="block">
    <article class="flex flex-col md:flex-row bg-white shadow rounded overflow-hidden">
        <!-- Obrázek -->
        <div class="md:w-1/3 bg-blue-200 h-40 md:h-auto"></div>

        <!-- Textový obsah -->
        <div class="md:w-2/3 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">První článek na blogu</h2>
                <p class="text-sm text-gray-500 mb-4">26.2.2026 &bull; Jan Svoboda</p>
                <p class="text-gray-700">
                    Toto je úvodní část článku. Může obsahovat krátký úvod, teaser nebo popis, co článek obsahuje.
                </p>
            </div>
        </div>
    </article>
</a>
