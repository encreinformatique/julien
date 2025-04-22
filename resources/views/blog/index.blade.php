@extends('layout')

@section('body')
    <article id="introduction" class="relative h-screen">
        <img src="/images/desk-laptop-bs-as.jpeg" alt="" class="fixed inset-0 -z-10 h-full w-full object-cover">
        <div class="-mt-10 pt-4 before:block before:max-h-96 before:absolute before:-inset-1 before:-skew-y-3 before:bg-amber-50 before:bg-opacity-70 before:shadow-2xl">
            <div class="relative overflow-hidden h-80 md:h-auto pt-24 pb-12 sm:py-24 mx-auto max-w-7xl px-6 lg:px-8">

               <h1 class="text-2xl mt-8 font-bold leading-10 text-gray-900 sm:text-6xl md:mt-0">{{ $page->title }}</h1>
            </div>
        </div>

        <div id="description" class="relative h-fit xl:h-screen max-w-7xl mx-auto py-3 px-6 md:py-16 md:px-24">
            <div class="text-gray-900 text-lg bg-white py-3 px-6 rounded-lg shadow-gray-400-200 shadow-xl md:py-16 md:px-24">
                {!! $page->content !!}
            </div>

            <div class="grid md:grid-cols-2 gap-3 mt-5">
                @foreach($entries as $entry)
                    <a href="{!! $entry->url !!}" class="text-gray-900 text-lg bg-white py-3 px-6 rounded-lg shadow-gray-400-200 shadow-xl md:py-4 md:px-6">
{{--                        <img src="{!! $entry->featured_image !!}" class="w-full">--}}
                        <h2>{!! $entry->title !!}</h2>
                        <div>{!! $entry->publication->format('d/m/Y') !!}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </article>
@endsection
