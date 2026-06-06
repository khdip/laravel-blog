<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    <ul class="flex flex-wrap text-sm font-medium text-center text-body justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-base hover:text-heading hover:bg-neutral-secondary-soft">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="text-gray-900 mt-8">
                @foreach ($posts as $post)
                    <div class="flex bg-white block border border-default rounded-lg shadow-xs mb-8">
                        <div class="p-6 flex-1">
                            <a href="#">
                                <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">{{ $post->title }}</h5>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::words($post->content, 20) }}</div>
                            <a href="#"
                                class="inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-blue-800 focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none">
                                Read more
                                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                        <a href="#">
                            <img class="rounded-r-lg w-48 h-full object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>