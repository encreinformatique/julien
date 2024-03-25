<div class="flex bg-sky-700 text-white py-3 px-6">
    <div class="mr-6">
        <img class="h-44 w-44 rounded-full shadow-sm shadow-gray-300" src="https://media.licdn.com/dms/image/C4E03AQHbhjcN0phN8g/profile-displayphoto-shrink_800_800/0/1516369428547?e=1715817600&v=beta&t=4I0Pu8HWXOv4OPFE6oy3EWyOJjhTnV7akw1xECZVxlE" alt="">
    </div>
    <div class="flex flex-col flex-1 space-y-3 pb-4">
        <h1 class="mt-2 text-xl font-semibold tracking-tight text-sky-50">Julien Devergnies</h1>
        <div class="flex flex-row">
            <svg class="h-6 w-6 mr-3" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"></path>
            </svg>
            <address>
                {!! config('cv.address') !!}
            </address>
        </div>
        <a href="tel:{{ str_replace(' ', '', config('cv.phone')) }}" class="flex flex-row text-sky-50 hover:text-sky-400">
            <svg class="h-6 w-6 mr-3" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
            </svg>
            {{ config('cv.phone') }}
        </a>
        <a href="mailto:{{ config('cv.email') }}" class="flex flex-row text-sky-50 hover:text-sky-400">
            <svg class="h-6 w-6 mr-3" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
            </svg>
            {{ config('cv.email') }}
        </a>
    </div>
    <div class="flex flex-col flex-1 space-y-3 pt-16 pb-4 justify-end">
        <a href="{{ config('cv.website')  }}" target="_blank" class="flex flex-row text-sky-50 hover:text-sky-400">
            <x-icon.web />
            {{ str_replace('https://', '', config('cv.website')) }}
        </a>
        <a href="{{ config('cv.linkedin')  }}" target="_blank" class="flex flex-row text-sky-50 hover:text-sky-400">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <x-icon.linkedin />
            {{ str_replace('https://www.', '', config('cv.linkedin')) }}
        </a>
        <a href="{{ config('cv.github') }}" target="_blank" class="flex flex-row text-sky-50 hover:text-sky-400">
            <svg class="h-6 w-6 mr-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
            </svg>
            {{ str_replace('https://', '', config('cv.github')) }}
        </a>
    </div>
</div>
