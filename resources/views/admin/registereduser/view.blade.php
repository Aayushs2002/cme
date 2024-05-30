@extends('admin.layout.main')

@section('body')
    <div class="shadow-xl bg-white">
        <h1>Name: {{ $cmes->member->name }}</h1>
        <h1>Email: {{ $cmes->member->email }}</h1>
        <h1>Cme Name: {{ $cmes->cme->title }}</h1>
        <h1>Organization Name: {{ $cmes->orgs->name }}</h1>
        {{-- @dd($cmes->status) --}}
        @if ($cmes->status != "verified")
            
        <form action="{{ route('admin.cmeregistration.verify', $cmes->id) }}" method="POST" class="" style="display:inline;">
            @csrf
            <button type="submit" class="bg-green-500 p-1 my-3 rounded-md">Verify</button>
        </form>
        @endif
        @if ($cmes->status != "rejected")

        <form action="{{ route('admin.cmeregistration.reject', $cmes->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="bg-red-500 p-1 my-3 rounded-md">Reject</button>
        </form>
        @endif
    </div>
@endsection
