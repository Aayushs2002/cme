@extends('admin.layout.main')

@section('body')
    <div class="py-5 text-2xl font-semibold">
        Edit Organization
    </div>
    <div class="row  w-[80%]">
        <form method="post" action="{{ route('admin.organization.update',$organization->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mt-5">
                <label for="name" class="font-medium"> Name</label>
                <input type="text" placeholder="Type organization name here" name="name" id="name"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('name',$organization->name) }}">
                @error('name')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-5">
                <label for="location" class="font-medium"> Location</label>

                <input type="text" placeholder="Type location name here" name="location" id="location"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('location',$organization->location) }}">
                @error('location')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-5">
                <label for="email" class="font-medium"> Email</label>

                <input type="email" placeholder="Type email here" name="email" id="email"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('email',$organization->email) }}">
                    @error('email')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-5">
                <label for="phone" class="font-medium"> Phone Number</label>

                <input type="text" placeholder="Type phone number here" name="phone" id="phone"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1"
                    value="{{ old('phone',$organization->phone) }}">
                    @error('phone')
                    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
                        * {{ $message }}
                    </div>
                @enderror
            </div>



            <button class="bg-black text-white  py-2 px-5 text-sm mt-5 font-medium rounded-lg">Add</button>
        </form>
    </div>
@endsection
