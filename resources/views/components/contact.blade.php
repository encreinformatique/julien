<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div id="contact" class="relative h-auto md:h-screen pb-6 md:py-0 px-6 md:px-24 text-gray-900 bg-white">
    <div class="hidden md:block lg:absolute lg:inset-0 lg:left-1/2">
        <img class="h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full" src="/images/contact.jpg" alt="">
    </div>
    <div class="pb-0 pt-8 sm:pt-16 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-24">
        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">{{ __('contact.title') }}</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">{{ __('contact.description') }}</p>
                <form action="#" method="POST" class="mt-8">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <x-form.label for="name" required="true">{{ __('contact.name') }}</x-form.label>
                            <div class="mt-2.5">
                                <input type="text" name="name" id="name" autocomplete="name" required="required" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
{{--                        <div>--}}
{{--                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">{{ __('contact.firstname') }}</label>--}}
{{--                            <div class="mt-2.5">--}}
{{--                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">{{ __('contact.lastname') }}</label>--}}
{{--                            <div class="mt-2.5">--}}
{{--                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="sm:col-span-2">
                            <x-form.label for="email" required="true">{{ __('contact.email') }}</x-form.label>
                            <div class="mt-2.5">
                                <input id="email" name="email" type="email" autocomplete="email" required="required" placeholder="lorem@domain.tld" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <x-form.label for="company">{{ __('contact.company') }}</x-form.label>
                            <div class="mt-2.5">
                                <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
{{--                        <div class="sm:col-span-2">--}}
{{--                            <div class="flex justify-between text-sm leading-6">--}}
{{--                                <label for="phone" class="block font-semibold text-gray-900">Phone</label>--}}
{{--                                <p id="phone-description" class="text-gray-400">Optional</p>--}}
{{--                            </div>--}}
{{--                            <div class="mt-2.5">--}}
{{--                                <input type="tel" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="sm:col-span-2">
                            <div class="flex justify-between text-sm leading-6">
                                <x-form.label for="message" required="true">{{ __('contact.message') }}</x-form.label>
{{--                                <p id="message-description" class="text-gray-400">Max 500 characters</p>--}}
                            </div>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4" required="required" aria-describedby="message-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
                        <x-form.submit />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
