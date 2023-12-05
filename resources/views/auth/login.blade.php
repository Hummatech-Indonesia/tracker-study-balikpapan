@extends('layouts.auth.app')
@section('content')
<section class="block overflow-hidden">
    <div class="flex flex-wrap m-0 items-center bg-white dark:bg-dark-card">
        <div class="md:w-1/2 w-full flex-auto">
            <div class="flex justify-center">
                <div class="flex-auto px-24">
                    <div
                        class=" relative flex flex-col overflow-hidden bg-white rounded-lg dark:bg-dark-card  card-transparent shadow xl:px-24 justify-center mb-0">
                        <div class="flex-auto p-8">
                            <a href=""
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
                            <h2 class="text-center dark:text-white">Sign In</h2>
                            <p class="text-center mb-4 dark:text-white text-secondary-600">Login to stay connected.</p>
                            <form>
                                <div class="flex flex-wrap">
                                    <div class="flex-auto w-full mb-4">
                                        <label for="email" class="mb-2 inline-block text-secondary-600 dark:text-white">Email</label>
                                        <input type="email" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="email" aria-describedby="email" placeholder="xyz@example.com">
                                    </div>
                                    <div class="flex-auto w-full mb-4">
                                        <label for="password" class="mb-2 inline-block dark:text-white text-secondary-600">Password</label>
                                        <input type="password" class="block w-full  py-2 px-4 bg-white rounded border dark:border-secondary-800 outline-none dark:focus:border-primary-500 focus:border-primary-500 focus:shadow dark:bg-dark-card" id="password" placeholder="xxxx"
                                            aria-describedby="password">
                                    </div>
                                    <div class="flex-auto w-full flex justify-between items-center">
                                        <div class="block pl-6">
                                            <input type="checkbox"
                                                class="rounded -ml-6 mt-1 bg-no-repeat bg-center w-4 h-4 border border-primary-500 float-left"
                                                id="customCheck1">
                                            <label class="form-check-label dark:text-white text-secondary-600" for="customCheck1">
                                                Remember Me
                                            </label>
                                        </div>
                                        <a href="recoverpw.html"
                                            class="text-primary-500 hover:text-primary-600 dark:text-white">Forgot
                                            Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <button type="submit" class="btn btn-primary dark:text-white">Sign In</button>
                                </div>
                                <p class="text-center my-4 dark:text-white text-secondary-600">or sign in with other accounts?</p>
                                <div class="flex justify-center">
                                    <ul class="flex">
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#">
                                                <img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/fb.svg" alt="fb">
                                            </a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#">
                                                <img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/gm.svg" alt="gm">
                                            </a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#">
                                                <img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/im.svg" alt="im">
                                            </a>
                                        </li>
                                        <li class="relative block px-4 py-2 bg-white  text-heading border-0 pb-0 dark:bg-dark-card">
                                            <a href="#">
                                                <img src="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/brands/li.svg" alt="li">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-4 mb-4 text-center dark:text-white text-secondary-600">
                                    Don’t have an account?
                                    <a href="sign-up.html"
                                        class="text-primary-500 hover:text-primary-600">Click here to sign up.</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto lg:w-2/4 lg:block hidden bg-primary-500 p-0 -mt-1  overflow-hidden">
            <img src="assets-admin/images/auth/01.png" class="h-full w-full object-cover" alt="images">
        </div>
    </div>
</section>
@endsection