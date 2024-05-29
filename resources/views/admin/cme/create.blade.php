@extends('admin.layout.main')

@section('body')
    <div class="py-5 text-2xl font-semibold">
        Add Cme
    </div>
    <div class="row  w-[80%]">
        <form method="post" action="{{ route('admin.cme.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mt-5">
                <label for="title" class="font-medium"> title</label>
                <input type="text" placeholder="Type organization title here" name="title" id="title"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-5">
                <label for="description" class="font-medium"> description</label>

                <input type="text" placeholder="Type description name here" name="description" id="description"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-5">
                <label for="date" class="font-medium">date</label>
                <input type="date" name="start_date" id="date"
                    class="w-full border py-2 mt-1 outline-none px-3 rounded-md">


                @error('start_date')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            @if (check() == true)
                <div class="mt-5">
                    <label for="" class="font-medium">Choose Organization</label>
                    {{-- @dd($categories) --}}
                    <select name="organization_id" class="w-full border py-2 mt-1 text-black outline-none px-3 rounded-md">

                        <option disabled selected>Choose Organization</option>
                        @foreach ($organizations as $organization)
                            <option class="text-black" value="{{ $organization->id }}">{{ $organization->name }}</option>
                        @endforeach
                    </select>
            @endif
    </div>

    <div class="mt-5">
        <label class="font-medium">Status</label>
        <div class="flex items-center mb-4">
            <input checked id="default-radio-1" type="radio" value="1" name="status"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">On Going</label>
        </div>
        <div class="flex items-center">
            <input id="default-radio-2" type="radio" value="0" name="status"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upcomming</label>
        </div>

    </div>

    <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Add</button>
    </form>
    </div>
@endsection
