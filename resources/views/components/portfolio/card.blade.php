<article class="relative isolate flex flex-col gap-8 lg:flex-row">
    @if($position === 'left')
    <div class="relative aspect-[16/9] sm:aspect-[4/1] lg:w-80 lg:shrink-0">
        <img src="{{ $snapshot }}" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>
    @endif
    <div class="order-2 @if($position === 'right')md:order-1 @endif">
        <div class="relative max-w-xl">
            <h3 class="mt-3 text-lg font-semibold leading-6">
                <a href="{{ $website }}" target="_blank" class="text-gray-900 transition-all hover:text-sky-800 hover:underline">
                    {{ $titre }} - <span class="text-amber-600">{{ $tech }}</span>
                </a>
            </h3>
            <p class="mt-5 text-sm leading-6 text-gray-600">{{ $slot }}</p>
        </div>
        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
            <div class="relative flex items-center gap-x-4">
                <img src="{{ $logo }}" alt="" class="h-10 rounded-full shadow-sm bg-gray-50">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <span class="absolute inset-0"></span>
                        {{ $customer }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @if($position === 'right')
        <div class="order-1 md:order-last relative aspect-[16/9] sm:aspect-[2/1] lg:w-80 lg:shrink-0">
            <img src="{{ $snapshot  }}" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
    @endif
</article>
