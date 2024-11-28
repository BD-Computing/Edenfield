@extends('layouts.web')
@section('title')
    Home
@endsection

@section('content')
    <div class="relative isolate overflow-hidden bg-[#B27526] h-[80%]">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#B27526] to-[var(--secondary)] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#B27526] to-[var(--secondary)] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="inset-0 -z-10 h-full w-full object-cover object-right md:object-center"
            style="background-image: url({{ URL::asset('images/soundwave.jpg') }}); background-size: cover; background-position: center top;background-repeat: no-repeat">
            <div class="h-[100%] bg-gradient-to-r from-transparent from-40% to-transparent top-0 left-0 py-24 md:py-80">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">

                        <h2 class="text-3xl md:text-6xl font-semibold tracking-tight text-[var(--primary)] ">
                            <span class="animated-text first">Book a
                                session</span>
                            <span class="animated-text second">Book a
                                session</span>
                            <br>
                        </h2>
                        <h2 class="text-2xl mt-3 font-semibold text-white tracking-tight text-[var(--primary)] md:text-5xl">
                            with us Today!
                        </h2>
                        <p class="font-semibold text-gray-100 py-3 text-sm md:text-md">
                            A Premium Podcasting Experience
                        </p>
                        <p class="mt-8 text-pretty text-md font-regular text-gray-100 md:text-md w-[100%] md:w-[80%]">
                            Our full-service video and podcasting studio is ready to make your next project shine.
                            With an in-house video engineer ready to assist you, we provide crisp audio and stunning video
                            in every recording session
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-24 md:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world's leaders and institutions
            </h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-7">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCWrlXXZd0euyIPGbe-yBDYtjb5N99Oi_7NA&s"
                    alt="Range Rover Centre" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ URL::asset('images/peptang.png') }}" alt="Peptang" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://www.maridadymotors.com/assets/front/images/MRDLOGO.jpg" alt="Maridady Motors"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsPdpzupiC2vJvVzLKcy-lvUVHeVKK4mr6Xg&s"
                    alt="My Space" width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://rexeroofing.com/rexeloads/uploads/2019/03/site-icon-rexe-roofing.png" alt="Rexe Roofing"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://unga-group.com/wp-content/uploads/2023/03/logo1@10x-8-1-e1680252125793.png"
                    alt="Unga Group" width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://i0.wp.com/pbs.twimg.com/profile_images/970551830697660416/g0K61B3W_400x400.jpg?resize=231%2C231&ssl=1"
                    alt="I Choose Life Africa" width="158" height="48">
            </div>
        </div>
    </div>

    <div class="bg-white py-24 md:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-pretty  font-semibold tracking-tight text-gray-900 text-lg md:text-3xl">
                    What we offer
                </h2>
                <p class="mt-2 text-gray-600 text-md md:text-lg/8">We offer a wide range of services as listed below</p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  sm:mt-4 sm:pt-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="flex max-w-xl flex-col items-start justify-between  shadow-md px-5 py-5 rounded-xl">
                    <div class="pt-1">
                        <img src="{{ URL::asset('images/studio.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                A Premium Podcasting Experience
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            Fully Equipped studios with multiple set locations for 4+ guests
                        </p>
                    </div>
                </div>
                <div class="flex max-w-xl flex-col items-start justify-between  shadow-md px-5 py-5 rounded-xl">
                    <div class="pt-1">
                        <img src="{{ URL::asset('images/setup-1.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Full Video and Content Studio
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            Our studio is meticulously crafted with content creation in mind
                        </p>
                    </div>
                </div>

                <div class="flex max-w-xl flex-col items-start justify-between  shadow-md px-5 py-5 rounded-xl">
                    <div class="pt-1">
                        <img src="{{ URL::asset('images/mic.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Equipment and Studio
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            Equipped with state-of-the-art technology, our studio has a wide range of equipment essential
                            for high-quality content production.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <section class="bg-[var(--primary)] text-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-20">
            <div class="max-w-xl">
                <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

                <p class="mt-4 text-gray-300">
                    Our mission is to empower businesses and brands by simplifying podcasting, allowing you to focus on what
                    you do best.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Industry-leading podcast recording studio and podcast production
                            services in Kenya.</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            We give businesses and brands a voice by providing a comprehensive podcasting service tailored
                            to your specific needs, covering everything from podcast audio and video recording to producing,
                            editing, and uploading of your finished podcasts.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Full-service podcast production studio</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Everything you need to get your podcast up and running, all in one place. At
                            {{ $settings->companyName }}
                            Studios, we provide podcast filming, producing and post-production services, as standard.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Our fully customisable podcast studio</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Our {{ $settings->companyName }} podcast studio is completely customisable based on your unique
                            needs. We offer a
                            wide selection of podcast sets which can be tailored to your preferences, with customisable
                            lighting options, varying backgrounds and furniture setups, and you can include your own
                            personalised items to ensure it fits your specific branding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <figure class="mt-10">
                <blockquote class="text-center md:text-xl/8 font-semibold text-gray-900">
                    <p>
                        At Edenfield Media LTD we ride on the principles of creative excellence and a customer-centric
                        approach in service delivery.
                        Our goal is to turn your creative vision to a reality masterpiece
                        & be your trusted ally in breathing life to your creative aspiration from Inception to completion.

                    </p>
                </blockquote>
                <figcaption class="mt-10">
                    <img class="mx-auto h-10 w-10 rounded-full" src="{{ URL::asset('images/gerald.jpeg') }}"
                        alt="CEO">
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base flex-col md:flex-row">
                        <div class="font-semibold text-gray-900">Gerald Bitok</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <div class="text-gray-600">CEO of {{ $settings->companyName }}</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
@endsection
