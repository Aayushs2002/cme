@extends('frontend.member.main')
@section('body')

<div class="">
    <div class="shadow">
        <h1 class="text-xl font-semibold text-center">{{$program->title}}</h1>

        <p class="text-center">{{$program->description}}</p>

        <h1>Register for this program</h1>

        
<form method="post" action="{{route('cme.register')}}">
    @csrf
    <input type="hidden" name="cme_id" value="{{$program->id}}">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dadaada:text-white">First name</label>
            <input type="text" name="name" id="name" value="{{$member->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dadaada:bg-gray-700 dadaada:border-gray-600 dadaada:placeholder-gray-400 dadaada:text-white dadaada:focus:ring-blue-500 dadaada:focus:border-blue-500" placeholder="John" required />
        </div>
       
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dadaada:text-white">Email address</label>
        <input type="email"  value="{{$member->email}}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dadaada:bg-gray-700 dadaada:border-gray-600 dadaada:placeholder-gray-400 dadaada:text-white dadaada:focus:ring-blue-500 dadaada:focus:border-blue-500" placeholder="john.doe@company.com" required />
    </div> 
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dadaada:bg-blue-600 dadaada:hover:bg-blue-700 dadaada:focus:ring-blue-800">Submit</button>
</form>

    </div>
</div>

@endsection