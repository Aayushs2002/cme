@extends('frontend.member.main')
@section('body')
    <div class="">
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
@endsection
