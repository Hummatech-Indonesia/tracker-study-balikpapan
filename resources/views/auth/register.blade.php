@extends('layouts.auth.app')
@section('content')
<section class="block overflow-hidden">
    <div class="flex flex-wrap m-0 items-center bg-white dark:bg-dark-card">
        <div class="md:w-1/2 w-full flex-auto">
            <div class="flex justify-center">
                <div class="flex-auto px-24">
                    <div
                        class=" relative flex flex-col overflow-hidden bg-white rounded-lg card-transparent shadow xl:px-24 justify-center mb-0 dark:bg-dark-card">
                        <div class="flex-auto p-8">
                            <a href="../index.html"
                                class="py-1 text-xl whitespace-nowrap mr-4 flex items-center mb-10 justify-center">
                                <svg width="75" class="text-primary-500 dark:text-primary-500 brand-logo" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                        fill="currentColor" />
                                    <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                                </svg>
                                <h2 class="mb-0 ml-4 rtl:mr-4 dark:text-white">Qompac UI</h2>
                            </a>
                            <h2 class="text-center dark:text-white">Sign Up</h2>
                            <p class="text-center mb-4 dark:text-white text-secondary-600">Create your Qompac UI account.</p>
                            <form>
                                <div class="flex flex-wrap">
                                    <div class="flex-auto lg:w-2/4 w-full px-4 mb-4">
                                        <label for="full-name" class="mb-2 inline-block dark:text-white text-secondary-600">Full Name</label>
                                        <input type="text" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="full-name" placeholder="John">
                                    </div>
                                    <div class="flex-auto w-full lg:w-2/4 px-4 mb-4">
                                        <label for="last-name" class="mb-2 inline-block dark:text-white text-secondary-600">Last Name</label>
                                        <input type="text" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="last-name" placeholder="Doe">
                                    </div>
                                    <div class="flex-auto w-full lg:w-2/4 px-4 mb-4">
                                        <label for="email" class="mb-2 inline-block dark:text-white text-secondary-600">Email</label>
                                        <input type="email" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="email" placeholder="xyz@example.com">
                                    </div>
                                    <div class="flex-auto w-full lg:w-2/4 px-4 mb-4">
                                        <label for="phone" class="mb-2 inline-block dark:text-white text-secondary-600">Phone No.</label>
                                        <input type="text" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card " id="phone" placeholder="123456789">
                                    </div>
                                    <div class="flex-auto w-full lg:w-2/4 px-4 mb-4">
                                        <label for="password" class="mb-2 inline-block dark:text-white text-secondary-600">Password</label>
                                        <input type="password" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="password">
                                    </div>
                                    <div class="flex-auto w-full lg:w-2/4 px-4 mb-4">
                                        <label for="confirm-password" class="mb-2 inline-block dark:text-white text-secondary-600">Confirm
                                            Password</label>
                                        <input type="password" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="confirm-password">
                                    </div>
                                    <div class="flex-auto w-full flex justify-center mb-3">
                                        <input type="checkbox" class="rounded -ml-6 mt-1 bg-no-repeat bg-center w-4 h-4 border border-primary-500 float-left rtl:ml-4" id="customCheck1">
                                        <label class="form-check-label pl-2 dark:text-white text-secondary-600" for="customCheck1 ">I agree
                                            with the terms of use</label>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" class="btn btn-primary dark:text-white">Sign Up</button>
                                </div>
                                <p class="text-center my-4 dark:text-white text-secondary-600">or sign in with other accounts?</p>
                                <div class="flex justify-center">
                                    <ul class="flex">
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/fb.svg" alt="fb"></a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/gm.svg" alt="gm"></a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/im.svg" alt="im"></a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/li.svg" alt="li"></a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-4 mb-4 text-center dark:text-white text-secondary-600">
                                    Already have an Account
                                    <a href="sign-in.html" class="text-underline text-primary-500 hover:text-primary-600">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 top-0">
                <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857"
                            transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857"
                            transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857"
                            transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857"
                            transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="flex-auto lg:w-2/4 lg:block hidden bg-primary-500 p-0 -mt-1 overflow-hidden">
            <img src="{{ asset('assets-admin/images/auth/01.png') }}" class=" h-full w-full object-cover"
                alt="images">
        </div>
    </div>
</section>
@endsection