<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/main.js') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
    <div x-cloak x-data="{ sidebarOpen: true }" class="font-roboto flex min-h-screen">
        <div class="fixed w-full top-0 z-[99] bg-white">
            @include('frontend.member.navbar')
        </div>
        @include('frontend.member.sidebar')
        <main :class="sidebarOpen ? 'ml-64' : 'ml-0'"
            class="flex-1 overflow-x-hidden overflow-y-auto mt-10 mb-2 w-full bg-slate-50">
            <div class=" px-6 w-full max-sm:px-4 py-8  mt-7">
                @yield('body')
            </div>
        </main>
    </div>
</body>
</html>