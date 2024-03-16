<div id="portfolio" class="relative bg-sky-100 bg-opacity-95 min-h-screen py-3 px-6 md:py-16 md:px-24">
    <div class="mx-auto px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <x-layout.h2>Portfolio</x-layout.h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ __('portfolio.description') }}</p>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                {!! __('portfolio.current_site') !!}
            </p>
            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                <x-portfolio.card
                    titre="Reine Rouge SaaS"
                    tech="Symfony / VueJS"
                    snapshot="/images/portfolio/reinerouge-saas.webp"
                    website="https://reinerouge.fr"
                    customer="TLH"
                    logo="/images/logos/tlh.png"
                >
                    {!! __('portfolio.projects.rr_saas') !!}
                    <div class="relative mt-3 fill-zinc-500 flex gap-3">
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.symfony />
                            <x-layout.tooltip>Symfony</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.vue />
                            <x-layout.tooltip>Symfony</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.database />
                            <x-layout.tooltip>MySQL</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.github />
                            <x-layout.tooltip>Github</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.cli />
                            <x-layout.tooltip>command-line</x-layout.tooltip>
                        </div>
{{--                        <div class="max-w-8 flex align-middle group cursor-pointer"><x-icon.php /></div>--}}
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.css />
                            <x-layout.tooltip>Bootstrap</x-layout.tooltip>
                        </div>
                    </div>
                </x-portfolio.card>
                <x-portfolio.card
                    titre="LD Design"
                    tech="NuxtJS / VueJS"
                    snapshot="/images/portfolio/ld-design.webp"
                    website="https://laurene.devergnies.com"
                    customer="LD Design"
                    logo="/images/logos/lddesign.png"
                    position="right"
                >
                    {!! __('portfolio.projects.ld') !!}
                    <div class="relative mt-3 fill-zinc-500 flex gap-3">
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.vue />
                            <x-layout.tooltip>VueJS</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.github />
                            <x-layout.tooltip>Github</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.tailwind />
                            <x-layout.tooltip>TailwindCSS</x-layout.tooltip>
                        </div>
                    </div>
                </x-portfolio.card>
                <x-portfolio.card
                    titre="Horaires-Commerces.fr"
                    tech="Symfony / Admin Sys."
                    snapshot="/images/portfolio/horairescommerces.webp"
                    website="https://www.horaires-commerces.fr"
                    customer="TLH"
                    logo="/images/logos/tlh.png"
                >
                    {!! __('portfolio.projects.hc') !!}
                    <div class="relative mt-3 fill-zinc-500 flex gap-3">
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.symfony />
                            <x-layout.tooltip>Symfony</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.javascript />
                            <x-layout.tooltip>JavaScript</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.database />
                            <x-layout.tooltip>MySQL</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.github />
                            <x-layout.tooltip>Github</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.cli />
                            <x-layout.tooltip>command-line</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.css />
                            <x-layout.tooltip>Foundation CSS</x-layout.tooltip>
                        </div>
                    </div>
                </x-portfolio.card>
                <x-portfolio.card
                    titre="Reine Rouge"
                    tech="NuxtJS / VueJS / TailwindCSS"
                    snapshot="/images/portfolio/reinerouge.webp"
                    website="https://reinerouge.fr"
                    customer="TLH"
                    logo="/images/logos/tlh.png"
                    position="right"
                >
                    {!! __('portfolio.projects.rr') !!}
                    <div class="relative mt-3 fill-zinc-500 flex gap-3">
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.vue />
                            <x-layout.tooltip>VueJS</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.github />
                            <x-layout.tooltip>Github</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.cli />
                            <x-layout.tooltip>command-line</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.tailwind />
                            <x-layout.tooltip>Tailwind</x-layout.tooltip>
                        </div>
                    </div>
                </x-portfolio.card>
                <x-portfolio.card
                    titre="Legado Azteca"
                    tech="Wordpress"
                    snapshot="/images/portfolio/legadoazteca.webp"
                    website="https://legadoazteca.com"
                    customer="WebsetStudio"
                    logo="/images/logos/websetstudio.png"
                >
                    {!! __('portfolio.projects.legadoazteca') !!}
                    <div class="relative mt-3 fill-zinc-500 flex gap-3">
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.wordpress />
                            <x-layout.tooltip>Wordpress</x-layout.tooltip>
                        </div>
                        <div class="max-w-8 flex align-middle group cursor-pointer">
                            <x-icon.css />
                            <x-layout.tooltip>CSS</x-layout.tooltip>
                        </div>
                    </div>
                </x-portfolio.card>
                <!-- More posts... -->
            </div>
        </div>
    </div>
</div>
