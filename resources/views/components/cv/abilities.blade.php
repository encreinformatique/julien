<div id="abilities" class="relative h-screen py-3 px-6 md:py-16 md:px-24">
    <div class="text-gray-900 bg-white py-3 px-6 md:py-16 md:px-24 rounded-lg shadow-gray-400-200 shadow-xl">
        <div class="grid grid-col-2">
            <div>
                <x-layout.h2>{{ __('template.computer') }}</x-layout.h2>
                <div class="grid gap-x-8 gap-y-6 grid-cols-2">
                    <x-cv.ability ability="Back-end" details="PHP, Symfony, PHPunit" rate="11/12" />
                    <x-cv.ability ability="SQL" details="MySQL, SQLite" rate="9/12" />
                    <x-cv.ability ability="JavaScript" details="NodeJS, VueJS" rate="8/12" />
                    <x-cv.ability ability="CSS" details="Tailwind, Bootstrap..." rate="10/12" />
                    <x-cv.ability :ability="__('template.systems')" details="Debian, Ubuntu" rate="5/12" />
                    <x-cv.ability ability="Mobile" details="React Native" rate="4/12" />
                </div>
            </div>

            <div>
                <x-layout.h2>{{ __('template.languages') }}</x-layout.h2>
                <x-cv.language :ability="__('template.lang.english')" details="C2 Proficient (EF SET)" rate="9/12" />
                <x-cv.language :ability="__('template.lang.spanish')" :details="__('template.bilingual')" rate="11/12" />
                <x-cv.language :ability="__('template.lang.french')" details="" rate="full" />
            </div>
        </div>
    </div>
</div>
