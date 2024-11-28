@extends('layouts.web')

@section('title')
    About Us
@endsection
@section('content')
    <div
        class="relative isolate overflow-hidden bg-gradient-to-r from-[var(--primary)] from-10%  to-transparent  py-24 sm:py-32">
        {{-- <img src="https://images.unsplash.com/photo-1596005554384-d293674c91d7?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Cover Image" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"> --}}

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">About Us</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-900 sm:text-xl/relaxed">
                    Welcome to {{ $settings->companyName }}, your trusted partner in podcast production and media
                    marketing. Based in the heart of Nairobi, Kenya, we are passionate about empowering brands, businesses,
                    and creatives to share their stories and connect with their audiences effortlessly.
                </p>
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

    <div class="bg-white py-5 sm:py-5">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  py-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="flex max-w-2xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            Who We Are
                        </h3>
                        <p class="mt-5 line-clamp-7 text-sm/6 text-gray-600">
                            At {{ $settings->companyName }}, we specialize in podcast recording and media marketing,
                            offering a seamless
                            blend of creative and technical expertise. Our state-of-the-art studio is designed to provide
                            high-quality podcast production services, while our marketing solutions help you amplify your
                            message and grow your audience.
                        </p>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            Our Mission
                        </h3>
                        <p class="mt-5 line-clamp-7 text-sm/6 text-gray-600">
                            We are committed to making podcasting simple and accessible, so you can focus on what you do
                            best: creating amazing content and building your brand.
                        </p>
                    </div>
                </div>
                <div class="flex max-w-2xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            What We Offer
                        </h3>
                        <ol class="text-gray-900 text-md">
                            <li><span class="font-bold">Podcast Recording Services:</span> Professionally equipped studios
                                to capture your voice with
                                clarity and precision.</li>
                            <li><span class="font-bold">Editing and Production:</span> From audio editing to mastering, we
                                ensure your podcast is polished and ready to impress.</li>
                            <li><span class="font-bold">Media Marketing Solutions:</span> Strategies tailored to help you
                                reach your audience, boost engagement, and drive results.</li>
                            <li><span class="font-bold">Consultation and Training:</span> Guidance to help you start or
                                enhance your podcasting journey.</li>
                        </ol>
                        <p class="mt-5 line-clamp-7 text-lg text-[var(--primary)] font-bold">
                            Let's create, connect, and grow together.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
                                                                                                                                                                                                                                                                                                                                                                  Heads up! 👋

                                                                                                                                                                                                                                                                                                                                                                  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
                                                                                                                                                                                                                                                                                                                                                                -->

    <section
        class="mb-5 relative bg-[url(https://images.unsplash.com/photo-1598941101837-e3fdd6d94b24?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l bg-gradient-to-r from-bg[var(--primary)] to-transparent">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 ">
            <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Why Choose
                    <strong class="block font-extrabold text-rose-500">Us </strong>
                </h1>
                <ol class="py-10 text-white text-lg/relaxed">
                    <li>Cutting-edge technology to ensure the best sound quality.</li>
                    <li>A passionate team dedicated to bringing your vision to life.</li>
                    <li>Customized solutions to meet your unique needs.</li>
                    <li>A vibrant and professional atmosphere in Nairobi’s creative hub.</li>
                </ol>
                <p class="mt-4 max-w-lg text-white sm:text-lg/relaxed">
                    Whether you're a seasoned podcaster or just starting out, {{ $settings->companyName }} is here to make
                    your journey
                    smooth and impactful.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="{{ route('contact') }}"
                        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Get Started
                    </a>

                    <a href="{{ route('contact') }}"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
