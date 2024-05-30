@extends('frontend.member.main')
@section('body')

    <div class="">
        @php
            $user = Auth::guard('members')->user();
        @endphp
        <h1 class="text-3xl py-5 font-semibold">Welcome To {{ $user->registerduser->name }}</h1>
    </div>
    @if ($upcommings->isNotEmpty())
        <div class="">
            {{-- @dd($upcommings) --}}
            <h1 class="text-xl font-semibold">Upcomming Program</h1>
            <div class="grid grid-cols-4">
                @foreach ($upcommings as $upcomming)
                    <a href="{{ route('singlepage', $upcomming->id) }}">

                        <div class="mt-4">
                            <div class="bg-white shadow-md rounded p-4 mb-4">
                                <h2 class="text-lg font-bold">{{ $upcomming->title }}</h2>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    @endif
    @if ($ongoings->isNotEmpty())
        <div class="">
            <h1 class="text-xl font-semibold">Ongoing Program</h1>
            <div class="grid grid-cols-4">
                @foreach ($ongoings as $ongoing)
                    <div class="mt-4">
                        <div class="bg-white shadow-md rounded p-4 mb-4">
                            <h2 class="text-lg font-bold">{{ $ongoing->title }}</h2>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endif
@endsection
