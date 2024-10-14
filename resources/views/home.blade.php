<x-guest-layout>

    {{-- <div class="w-full px-4 sm:px-8 xl:px-0 relative">
            <div class="flex flex-wrap gap-x-7 gap-y-9">
                <div
                    class="w-full border flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-10 rounded-xl p-4 lg:p-2.5">
                    <div class="lg:max-w-[536px] w-full">
                        <a href="blog-single.html">
                            <img class="w-full" src="{{ asset('assets/images/hero-01.png') }}" alt="hero">
                        </a>
                    </div>
                    <div class="lg:max-w-[540px] w-full">
                        <a href="category.html"
                            class="inline-flex text-purple-dark bg-purple/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4">Lifestyle</a>
                        <h1 class="font-bold text-custom-4 xl:text-heading-4 text-dark mb-4">
                            <a href="blog-single.html">
                                Begin here to obtain a brief summary encompassing all the
                                essential
                            </a>
                        </h1>
                        <p class="max-w-[524px]">
                            This comprehensive post serves as your cheat-sheet to swiftly
                            familiarize yourself with Ghost. Packed with crucial...
                        </p>
                        <div class="flex items-center gap-2.5 mt-5">
                            <a href="author.html" class="flex items-center gap-3">
                                <div class="flex w-6 h-6 rounded-full overflow-hidden">
                                    <img src="{{ asset('assets/images/user-01.png') }}" alt="user">
                                </div>
                                <p class="text-sm">Adrio Devid</p>
                            </a>
                            <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                            <p class="text-sm">Sep 10, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="gap-6 grid grid-cols-1 lg:grid-cols-2 w-full">
                    <div
                        class=" border w-full flex flex-col sm:flex-row sm:items-center gap-6 bg-white shadow-1 rounded-xl p-2.5">
                        <div class="lg:max-w-[238px] w-full">
                            <a href="blog-single.html">
                                <img class="w-full" src="{{ asset('assets/images/hero-02.png') }}" alt="hero">
                            </a>
                        </div>
                        <div class="lg:max-w-[272px] w-full">
                            <a href="category.html"
                                class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4">Technology</a>
                            <h2 class="font-semibold text-custom-lg text-dark mb-3">
                                <a href="blog-single.html">
                                    14 Innovative Architectural Designs to Create a Vast
                                    Interior Space
                                </a>
                            </h2>
                            <div class="flex items-center gap-2.5">
                                <p class="text-sm">
                                    <a href="author.html">By Adrio Devid</a>
                                </p>
                                <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                                <p class="text-sm">Sep 10, 2025</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" border w-full flex flex-col sm:flex-row sm:items-center gap-6 bg-white shadow-1 rounded-xl p-2.5">
                        <div class="lg:max-w-[238px] w-full">
                            <a href="blog-single.html">
                                <img class="w-full" src="{{ asset('assets/images/hero-03.png') }}" alt="hero">
                            </a>
                        </div>
                        <div class="lg:max-w-[272px] w-full">
                            <a href="category.html"
                                class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4">Travel</a>
                            <h2 class="font-semibold text-custom-lg text-dark mb-3">
                                <a href="blog-single.html">
                                    Traveller Visiting Ice Cave With Amazing Eye-catching view
                                    with nature
                                </a>
                            </h2>
                            <div class="flex items-center gap-2.5">
                                <p class="text-sm">
                                    <a href="author.html">By Adrio Devid</a>
                                </p>
                                <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                                <p class="text-sm">Sep 10, 2025</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}



    {{-- <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-[80vh] lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Let us find your

                    <strong class="block font-extrabold text-rose-500"> Forever Home. </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                    numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Get Started
                    </a>

                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">New Collection</h2>

                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>

            <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
                <li>
                    <a href="#" class="group relative block">
                        <img src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            alt=""
                            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Casual Trainers</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group relative block">
                        <img src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            alt=""
                            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Winter Jumpers</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>

                <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                    <a href="#" class="group relative block">
                        <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                            alt=""
                            class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section> --}}
    {{-- @include('layouts.partials.banner') --}}


</x-guest-layout>
