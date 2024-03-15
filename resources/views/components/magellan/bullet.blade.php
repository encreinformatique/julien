<a href="#{{ $id }}" id="link-{{ $id }}" class="group" @if($current) aria-current="step" @endif>
    <span class="flex items-start justify-end group">
{{--        @if($current) text-sky-600 @else text-amber-50 @endif --}}
{{--        <span class="mr-3 text-sm font-medium text-sky-600 group-has-[.current]:text-amber-500 current:text-amber-50 group-hover:text-gray-900">{{ $slot }}</span>--}}
        <span class="relative flex h-5 w-5 flex-shrink-0 items-center justify-center" title="{{ $slot }}">
{{--        @if($current)--}}
            <span class="hidden group-has-[.current]:inline absolute h-4 w-4 rounded-full bg-amber-200"></span>
            <span class="hidden group-has-[.current]:block relative h-2 w-2 rounded-full bg-amber-600"></span>
{{--        @elseif ($completed)--}}
{{--            <svg class="h-full w-full text-sky-600 group-hover:text-sky-800" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                 aria-hidden="true">--}}
{{--            <path fill-rule="evenodd"--}}
{{--                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"--}}
{{--                  clip-rule="evenodd"/>--}}
{{--            </svg>--}}
{{--        @else--}}
                <div class="inline group-has-[.current]:hidden h-2 w-2 rounded-full bg-gray-300 group-hover:bg-amber-50"></div>
{{--        @endif--}}
        </span>
    </span>
</a>
