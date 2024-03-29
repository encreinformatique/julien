<div id="abilities" class="relative h-fit xl:h-screen mb-6 py-6 px-6 md:py-16 md:px-24 md:mb-0">
    <div class="text-gray-900 text-xl bg-white py-3 px-6 md:py-16 md:px-24 rounded-lg shadow-gray-400-200 shadow-xl">
        <x-layout.h2>{{ __('stack.title') }}</x-layout.h2>

        <x-layout.h3>{{ __('stack.backend') }}</x-layout.h3>
        <div class="-mx-6 grid grid-cols-3 gap-1 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-7">
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.php/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">PHP</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.symfony/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Symfony</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.laravel/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Laravel</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.node/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">node</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.database/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">MySQL</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.wordpress/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Wordpress</span>
            </div>
        </div>

        <x-layout.h3>{{ __('stack.frontend') }}</x-layout.h3>
        <div class="-mx-6 grid grid-cols-3 gap-1 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-7">
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.html/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">HTML5</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.javascript/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">JavaScript</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.vue/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">VueJS</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.react/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">React</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.css/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">CSS</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.bootstrap/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Bootstrap</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.tailwind/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Tailwind</span>
            </div>
        </div>

        <x-layout.h3>{{ __('stack.tools') }}</x-layout.h3>
        <div class="-mx-6 grid grid-cols-3 gap-1 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-7">
            <div class="bg-gray-400/5 rounded-xl p-4 flex flex-col justify-between">
                <x-icon.github/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Github</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.git/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">git</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.cli/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">cli</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.debian/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Debian</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.ubuntu/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Ubuntu</span>
            </div>
            <div class="bg-gray-400/5 rounded-xl p-4  flex flex-col justify-between">
                <x-icon.slack/>
                <span class="inline-block w-full text-sm text-gray-600 text-center">Slack</span>
            </div>
        </div>

        <x-layout.h3>{{ __('stack.languages') }}</x-layout.h3>
        <p class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-8">
            <span class="w-full md:w-auto font-bold">{{ __('template.lang.english') }} <span
                    class="text-gray-600 italic font-normal ml-2">(C2, EF SET)</span></span>
            <span class="w-full md:w-auto font-bold">{{ __('template.lang.spanish') }}<span
                    class="text-gray-600 font-normal italic ml-2">({{ __('template.bilingual') }})</span></span>
            <span class="w-full md:w-auto font-bold">{{ __('template.lang.french') }}<span
                    class="text-gray-600 italic font-normal ml-2">({{ __('template.mother_tongue') }})</span></span>
        </p>
    </div>
</div>
