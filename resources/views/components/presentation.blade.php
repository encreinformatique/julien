<div class="mx-auto max-w-4xl text-left space-y-8">
    <h1 class="text-3xl font-bold leading-10 text-gray-900 sm:text-6xl">
        {!! __('home.title') !!}<br>
        <span class="flex">
            <span>{{ __('home.and') }}</span>
            <span class="ml-1.5 flex-1">
                <span class="swipe-traits overflow-hidden">
                    @foreach(__('home.i_am') as $idx => $i_am)
                        <span class="item w-full transition-all duration-500 ease-in-out @if($idx === 0)inline @else opacity-0 scale-0 @endif">{{ $i_am }}</span>
                    @endforeach
                    {{--            <span class="item w-full transition-all inline">technophile</span>--}}
                    {{--            <span class="item w-full transition-all opacity-0 hidden">optimiste</span>--}}
                    {{--            <span class="item w-full transition-all opacity-0 hidden">trilingue</span>--}}
                    {{--            <span class="item w-full transition-all opacity-0 hidden">fan de BD</span>--}}
                    {{--            <span class="item w-full transition-all opacity-0 hidden">amateur de bonnes recettes</span>--}}
                    {{--            <span class="item w-full transition-all opacity-0 hidden">cinéphile</span>--}}
                </span>
            </span>
        </span>
{{--        {{ __('home.description') }}--}}
    </h1>
    {{--<p class="mt-6 text-lg leading-8 text-gray-600">{{ __('home.description') }}</p>--}}
{{--    <div class="mt-10 flex items-center justify-center gap-x-6">--}}
{{--        <a href="#" class="inline-flex items-center gap-x-1.5 rounded-md bg-sky-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">--}}
{{--            <x-icon.download /> {{ __('home.download') }}--}}
{{--        </a>--}}
{{--        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">{{ __('home.learn_more') }} <span aria-hidden="true">→</span></a>--}}
{{--    </div>--}}
</div>
