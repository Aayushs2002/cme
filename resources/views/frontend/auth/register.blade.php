@extends('frontend.layout.main')
@section('body')
    <section class="bg-gray-50 dadad:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div
                class="w-full bg-white rounded-lg shadow dadad:border md:mt-0 sm:max-w-md xl:p-0 dadad:bg-gray-800 dadad:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dadad:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route('member.register')}}" method="post">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dadad:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dadad:bg-gray-700 dadad:border-gray-600 dadad:placeholder-gray-400 dadad:text-white dadad:focus:ring-blue-500 dadad:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dadad:text-white">Your
                                name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dadad:bg-gray-700 dadad:border-gray-600 dadad:placeholder-gray-400 dadad:text-white dadad:focus:ring-blue-500 dadad:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div class="">
                            <label for="organizations"
                                class="block mb-2 text-sm font-medium text-gray-900 dadad:text-white">Choose any one
                                organization</label>

                            <select name="organization_id" id="organizations"
                                class="w-full border py-2 mt-1 text-black outline-none px-3 rounded-md">

                                <option disabled selected>Choose Organization</option>
                                @foreach ($organizations as $organization)
                                    <option class="text-black" value="{{ $organization->id }}">{{ $organization->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dadad:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dadad:bg-gray-700 dadad:border-gray-600 dadad:placeholder-gray-400 dadad:text-white dadad:focus:ring-blue-500 dadad:focus:border-blue-500"
                                required="">
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="block mb-2 text-sm font-medium text-gray-900 dadad:text-white">Confirm
                                password</label>
                            <input type="password" name="confirm-password" id="confirm-password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dadad:bg-gray-700 dadad:border-gray-600 dadad:placeholder-gray-400 dadad:text-white dadad:focus:ring-blue-500 dadad:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dadad:bg-gray-700 dadad:border-gray-600 dadad:focus:ring-primary-600 dadad:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dadad:text-gray-300">I accept the <a
                                        class="font-medium text-primary-600 hover:underline dadad:text-primary-500"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dadad:bg-primary-600 dadad:hover:bg-primary-700 dadad:focus:ring-primary-800">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500 dadad:text-gray-400">
                            Already have an account? <a href="#"
                                class="font-medium text-primary-600 hover:underline dadad:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
