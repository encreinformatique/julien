<div class="flex mt-5">
    <span class="min-w-16 mt-1">{{ $from->format('Y') }}<br><small>{{ $from->format('M') }}</small><br>-<br>@if($until) {{ $until->format('Y') }}<br><small>{{ $until->format('M') }}</small> @else {{ __('template.today') }} @endif</span>
    <div class="relative flex-1">
        <h3 class="flex-1 text-xl font-bold tracking-tight">
            {{ $jobTitle  }}
            @if($location) <span class="text-sky-600">{{ $location }}</span> @endif
        </h3>
        <ul class="list-disc pl-4 mt-3 text-slate-900 dark:text-slate-200 list-image-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=')]">
            {{ $slot }}
        </ul>
        @if(!empty($stack))
            <div class="absolute right-0 top-8 min-w-72">
                <ul class="list-disc pl-4 mt-3 text-slate-900 dark:text-slate-200 list-image-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=')]">
                    @foreach($stack as $stk)
                        <li>{{ $stk }}</li>
                    @endforeach
                </ul>
{{--                {{ implode(', ', $stack) }}--}}
            </div>
        @endif
    </div>
</div>
