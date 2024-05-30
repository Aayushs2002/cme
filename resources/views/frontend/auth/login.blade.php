@extends('frontend.layout.main')
@section('body')

<section class="bg-gray-50 dada:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dada:text-white">
            Login    
        </a>
        <div class="w-full bg-white rounded-lg shadow dada:border md:mt-0 sm:max-w-md xl:p-0 dada:bg-gray-800 dada:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dada:text-white">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('login.post')}}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dada:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dada:bg-gray-700 dada:border-gray-600 dada:placeholder-gray-400 dada:text-white dada:focus:ring-blue-500 dada:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dada:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dada:bg-gray-700 dada:border-gray-600 dada:placeholder-gray-400 dada:text-white dada:focus:ring-blue-500 dada:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dada:bg-gray-700 dada:border-gray-600 dada:focus:ring-primary-600 dada:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="remember" class="text-gray-500 dada:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dada:text-primary-500">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-black hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dada:bg-primary-600 dada:hover:bg-primary-700 dada:focus:ring-primary-800">Sign in</button>
                    <p class="text-sm font-light text-gray-500 dada:text-gray-400">
                        Don’t have an account yet? <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dada:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
  @endsection