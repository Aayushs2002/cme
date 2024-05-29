<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r-2 border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="text-center text-2xl font-bold">
        Admin
    </div>
    <div class="h-full px-5 py-3 overflow-y-auto bg-white ">
        <div class="  ">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="">
                    <a href="{{ route('admin.dashboard') }}" class="flex py-1 md:py-3 pl-1 align-middle ">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v8h-6z"></path>
                                <path d="M4 16h6v4h-6z"></path>
                                <path d="M14 12h6v8h-6z"></path>
                                <path d="M14 4h6v4h-6z"></path>
                            </svg>
                        </div>
                        <span
                            class="pb-1 md:pb-0 text-3xl md:text-base block md:inline-block">Dashboard</span>
                    </a>
                </li>
                @if (check() == True)

                <li class="">
                    <a href="{{ route('admin.organization.index') }}" class="flex py-1 md:py-3 pl-1 align-middle ">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v8h-6z"></path>
                                <path d="M4 16h6v4h-6z"></path>
                                <path d="M14 12h6v8h-6z"></path>
                                <path d="M14 4h6v4h-6z"></path>
                            </svg>
                        </div>
                        <span
                            class="pb-1 md:pb-0 text-3xl md:text-base block md:inline-block">Society/Organization</span>
                    </a>
                </li>
@endif

                @if (check() == true)
                    <li class="">
                        <a href="{{ route('admin.user.index') }}" class="flex py-1 md:py-3 pl-1 align-middle ">
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 4h6v8h-6z"></path>
                                    <path d="M4 16h6v4h-6z"></path>
                                    <path d="M14 12h6v8h-6z"></path>
                                    <path d="M14 4h6v4h-6z"></path>
                                </svg>
                            </div>
                            <span class="pb-1 md:pb-0 text-3xl md:text-base block md:inline-block">Add user</span>
                        </a>
                    </li>
                @endif
                <li class="">
                    <a href="{{ route('admin.cme.index') }}" class="flex py-1 md:py-3 pl-1 align-middle ">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v8h-6z"></path>
                                <path d="M4 16h6v4h-6z"></path>
                                <path d="M14 12h6v8h-6z"></path>
                                <path d="M14 4h6v4h-6z"></path>
                            </svg>
                        </div>
                        <span class="pb-1 md:pb-0 text-3xl md:text-base block md:inline-block">Cme Program</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.registered.member')}}" class="flex py-1 md:py-3 pl-1 align-middle ">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v8h-6z"></path>
                                <path d="M4 16h6v4h-6z"></path>
                                <path d="M14 12h6v8h-6z"></path>
                                <path d="M14 4h6v4h-6z"></path>
                            </svg>
                        </div>
                        <span class="pb-1 md:pb-0 text-3xl md:text-base block md:inline-block">Registered For Cme</span>
                    </a>
                </li>








        </div>
    </div>
</aside>
