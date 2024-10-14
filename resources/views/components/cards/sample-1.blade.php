<a href="#" class="group relative block h-64 sm:h-80 lg:h-96 bg-white dark:bg-gray-900">
    <span class="absolute inset-0 border-2 border-dashed border-black rounded"></span>

    <div class="relative flex h-full transform items-end border-2 shadow-lg rounded border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2"
        style="background-image: url({{ asset('assets/images/hero-default.webp') }}); background-size: cover;">

        <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="size-10 sm:size-12" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> --}}
            {{-- <img alt="bg" loading="lazy"
            class="w-full h-full" src="{{ asset('assets/images/hero-default.webp') }}"
            style="color: transparent;"> --}}

            <h2 class="mt-4 text-xl font-medium sm:text-2xl">Go around the world</h2>
        </div>

        <div
            class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
            <h3 class="mt-4 text-xl font-medium sm:text-2xl">Go around the world</h3>

            <p class="mt-4 text-sm sm:text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium voluptatem
                omnis atque culpa repellendus.
            </p>

            <p class="mt-8 font-bold flex items-center gap-2">
                <span class="text-sm font-medium"> Read more </span>

                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </p>
        </div>
    </div>
</a>
