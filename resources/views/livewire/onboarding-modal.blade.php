<x-dialog-modal wire:model="showModal" maxWidth="7xl">
    <x-slot name="title"></x-slot>
    <x-slot name="content">
        <section class="">
            <div class="mx-auto max-w-screen-xl items-center gap-16 px-4 pt-8 lg:grid lg:grid-cols-2 lg:px-6 lg:pt-16">
                <div class="">
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Explore your basketball talent with Online Sports Talents!</h1>
                    <p class="mt-6 text-xl leading-8 text-gray-700">
                        Welcome to the platform where your sports dreams may take off.
                    </p>
                    <h3 class="mt-8 text-xl font-semibold tracking-tight text-gray-900">Our mission is threefold: </h3>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            @svg('heroicon-s-user-circle', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                            <span><strong class="font-semibold text-gray-900">Share Your Story</strong><br>Your journey as an athlete is a story important to tell. Your story like you want to tell it - through OnlineSportsTalent you can do just that. Let others see your talent and journey, conveyed through your best video clips and testimonials. Your story is a powerful tool that showcases your dedication, passion, and talent, thus exposing your unique abilities before clubs and scouts.
                                <br>We assist you in presenting your sports talent to professional clubs and colleges and to support these organizations in discovering exceptional talents like yours.
                                <br>Our platform acts as a conduit, facilitating direct communication between you and the interested parties, free from any interference by OnlineSportsTalent.
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <img class="h-full w-full rounded-lg object-cover object-center" src="https://source.unsplash.com/XmYSlYrupL8">
                    <img class="mt-4 h-full w-full rounded-lg object-cover object-center lg:mt-10" src="https://source.unsplash.com/HM3WZ4B1gvM">
                </div>
            </div>
            <div class="mx-auto max-w-screen-xl items-center gap-16 px-4 pb-8 lg:grid lg:grid-cols-2 lg:px-6">
                <div class="">
                    <ul role="list" class="mt-8 space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            @svg('heroicon-s-chat-bubble-oval-left-ellipsis', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                            <span><strong class="font-semibold text-gray-900">Connect with Clubs and Associations Worldwide</strong><br>Ever dreamt of showcasing your skills to clubs and associations beyond your local scene? OnlineSportsTalent isn't just a platform; it's your bridge to a global sports network. Our platform propels your talent onto the radar of international teams, giving you opportunities that span continents. Imagine being able to connect with clubs and associations, not just in your region, but around the world. Let your talent be seen by the right people, no matter where they are. </span>
                        </li>
                        <li class="flex gap-x-3">
                            @svg('heroicon-s-arrow-trending-up', 'mt-1 h-5 w-5 flex-none text-indigo-600')
                            <span><strong class="font-semibold text-gray-900">We Grow, Together We Thrive</strong><br>
                                OnlineSportsTalent is a platform under construction, for the love of sport and dreams of athletes. We're committed to improvement, and you're an integral part of this journey. The more you engage and share your experience on socials, the stronger the platform becomes for everyone. So – share OnlineSportsTalent as much as possible. And the more OnlineSportsTalent will be important for clubs. Sometimes you will experience flaws when we build out the site. Rest sure that we do it on purpose to make the platform better. During our initial phase, our services are absolutely free. However, once we reach a certain threshold, we will establish a fair pricing structure based on the value that OnlineSportsTalent brings to the table. For all 1000 first movers this service is free forever! If you get a contract – we charge nothing. This is between you and the club / organization.
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <img class="h-full w-full rounded-lg object-cover object-center" src="https://source.unsplash.com/4ie4fXv7cX4">
                    <img class="mt-4 h-full w-full rounded-lg object-cover object-center lg:mt-10" src="https://source.unsplash.com/AddAnDkkovM">
                </div>
            </div>
            <div class="mx-auto max-w-screen-xl items-center gap-16 space-y-4 px-4 pb-8 text-gray-600 lg:px-6">

                <h3 class="mt-8 text-xl font-semibold tracking-tight text-gray-900">Roadmap:</h3>

                <p class="mt-8">
                    When we have sufficient athletes registered on OnlineSportsTalents we expect to upload sample contracts and connect you with specialized experts, who can guide you through the process of setting up contractual agreements. To prevent you from being lured.
                </p>
                <p>
                    Every sport is unique and we start with Basketball. But our aspirations are to expand into icehockey, soccer/football, handball – and more depending on our successes .
                </p>
            </div>
        </section>
    </x-slot>
    <x-slot name="footer">
        <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
            Dismiss
        </x-secondary-button>
    </x-slot>
</x-dialog-modal>
