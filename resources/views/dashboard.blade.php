<x-app-layout>
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        {{-- <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p> --}}
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Empower your sports dreams!</h1>
                        <p class="mt-6 text-xl leading-8 text-gray-700">
                            At OnlineSportsTalent, we connect aspiring athletes like you with professional clubs and colleges. We provide you with a platform to showcase your sports prowess through a story board of your career featuring stats, videos, and testimonials that validate your talent and dedication.
                        </p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Roadmap for OnlineSportsTalent:</h2>
                    </div>
                </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="https://source.unsplash.com/57rD2oDZquc" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p>
                            As we embark on this journey, we aim to build a vibrant community of sports talents and clubs. During our initial phase, our services are absolutely free. However, once we reach a certain threshold, we will establish a fair pricing structure based on the value that OnlineSportsTalent brings to the table. Monthly subscriptions for athletes may range from USD 5-10, varying based on age, talent level, and specific sport. For clubs, pricing will be tailored to the professional standards of the league in their respective countries and the sporting value we bring.
                        </p>
                        <h3 class="mt-8 text-xl font-semibold tracking-tight text-gray-900">Our mission is threefold: </h3>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600">
                            <li class="flex gap-x-3">
                                @svg('heroicon-s-user-circle', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                                <span><strong class="font-semibold text-gray-900">Assisting you in presenting your sports talent</strong> to professional clubs and colleges and to support these organizations in discovering exceptional talents like yours.</span>
                            </li>
                            <li class="flex gap-x-3">
                                @svg('heroicon-s-chat-bubble-oval-left-ellipsis', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                                <span>Our platform acts as a conduit, <strong class="font-semibold text-gray-900">facilitating direct communication between you and the interested parties</strong>, free from any interference by OnlineSportsTalent.</span>
                            </li>
                            <li class="flex gap-x-3">
                                @svg('heroicon-s-document-text', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                                <span>As part of our service, we offer <strong class="font-semibold text-gray-900">sample contracts and connect you with specialized sports lawyers</strong> who can guide you through the process of setting up contractual agreements.</span>
                            </li>
                        </ul>
                        {{-- <h3 class="mt-8 text-xl font-semibold tracking-tight text-gray-900">
                            Initial focus on several prominent sports that boast a high level of professionalism and abundant talent:
                        </h3>
                        <p class="mt-8">
                        </p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600">
                            <li class="flex gap-x-3">
                                <span>
                                    <strong class="font-semibold text-gray-900">Basketball</strong> - A sport with an abundance of exceptional talent in North America, which also holds promising opportunities in Europe.
                                </span>
                            </li>
                            <li class="flex gap-x-3">
                                <span>
                                    <strong class="font-semibold text-gray-900">Icehockey</strong> - A game that thrives on the immense talent pool found in North America and around the Baltic Sea region.
                                </span>
                            </li>
                            <li class="flex gap-x-3">
                                <span>
                                    <strong class="font-semibold text-gray-900">Soccer/Football</strong> - With vast talent spread across Africa, South America and beyond, this sport presents numerous opportunities, even in regions without fully professional leagues.
                                </span>
                            </li>
                            <li class="flex gap-x-3">
                                <span>
                                    <strong class="font-semibold text-gray-900">Handball</strong> - he Scandinavian countries are known for their surplus of exceptional handball talents, ready to take on a new challenge in a foreign country.
                                </span>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
