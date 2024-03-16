<div id="description" class="relative h-fit xl:h-screen max-w-7xl mx-auto py-3 px-6 md:py-16 md:px-24">
    <div class="text-gray-900 text-lg bg-white py-3 px-6 rounded-lg shadow-gray-400-200 shadow-xl md:py-16 md:px-24">
        <x-layout.h2>{{ __('presentation.title') }}</x-layout.h2>
        <p class="my-3 mt-6">{!! __('presentation.me') !!}</p>
        <p class="my-3">{{ __('presentation.you') }}</p>
        <nav class="grid grid-cols-1 md:grid-cols-3 gap-2 mb-3">
            <a href="#contact" class="mr-4 underline hover:text-sky-600">{{ __('presentation.cta') }}</a>
            <a href="#abilities" class="mr-4 underline hover:text-sky-600">{{ __('presentation.abilities') }}</a>
            <a href="https://linkedin.com/in/jdevergnies" target="_blank" class="mx-4 hover:text-sky-600 flex">
                <x-icon.linkedin />
                <span class="underline">Linkedin</span>
            </a>
        </nav>
    </div>
</div>
