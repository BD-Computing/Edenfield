@extends('layouts.web')

@section('title')
    About Us
@endsection
@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world's leaders and institutions
            </h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://images.seeklogo.com/logo-png/53/1/safaricom-logo-png_seeklogo-530479.png" alt="Transistor"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://kicc.co.ke/wp-content/uploads/2023/07/Untitled-1.png" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://images.africanfinancials.com/ke-coop-logo-min.png" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://www.tveta.go.ke/wp-content/uploads/2021/08/TVETA-Logo-August-2019.png" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://kabarak.ac.ke/images/logos/Kabarak_University_Extended_logo_910x256.png" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
    </div>

    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        {{-- <img src="https://images.unsplash.com/photo-1596005554384-d293674c91d7?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"> --}}
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[var(--secondary)] to-[var(--primary)] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[var(--secondary)] to-[var(--primary)] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Who we are</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">At Venture Africa Safaris, we
                    believe in the magic of Africa's wilderness and the power of authentic travel experiences. Founded with
                    a passion for exploration, our agency is dedicated to showcasing Kenya's unparalleled beauty—from the
                    sweeping savannas of the Maasai Mara to the white sands of the Kenyan coast and beyond. With us, every
                    journey is crafted to connect you with nature, wildlife, and local cultures in a meaningful way.
                </p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                    <a href="{{ route('careers') }}">Open roles <span aria-hidden="true">&rarr;</span></a>
                    <a href="{{ route('services') }}"> Our Services <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5 sm:py-5">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-b border-gray-200 py-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="flex max-w-2xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Why Travel with Us?
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-7 text-sm/6 text-gray-600">
                            Our team of local experts brings years of experience and a deep love for the destinations we
                            offer. We know Kenya like the back of our hand and are committed to sharing its wonders with
                            travelers from around the world. Whether you're a first-time visitor or a seasoned explorer, we
                            tailor each safari to suit your interests, pace, and budget. We prioritize sustainable
                            practices, supporting local communities and conservation efforts to protect Kenya's stunning
                            wildlife and natural habitats for generations to come.
                        </p>
                    </div>
                </div>
                <div class="flex max-w-2xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Our Promise
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-7 text-sm/6 text-gray-600">
                            At Venture Africa Safaris, we promise more than just a tour; we promise an unforgettable
                            adventure. We aim to make every trip a blend of excitement, learning, and awe-inspiring moments.
                            From the thrill of spotting a lion on the prowl to the peaceful beauty of a sunset over the
                            plains, we’ll be by your side to make every experience as enriching as it is memorable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <svg viewBox="0 0 1024 1024"
                    class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                    aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                        fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                        Join Us on the Journey of a Lifetime!
                    </h2>
                    <p class="mt-6 text-pretty text-lg/8 text-gray-300">Let Venture Africa Safaris guide you to the heart of
                        Kenya. We can't wait to welcome you to our world and help you create memories that will last
                        forever.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                            started</a>
                        <a href="{{ route('services') }}" class="text-sm/6 font-semibold text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                        src="https://images.unsplash.com/photo-1596005554384-d293674c91d7?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="App screenshot" width="1824" height="1080">
                </div>
            </div>
        </div>
    </div>
@endsection
