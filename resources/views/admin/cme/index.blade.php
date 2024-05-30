@extends('admin.layout.main')

@section('body')
    <div class="px-5 bg-background w-full">

        <div class="flex justify-between">

            <div class="text-2xl font-bold">Cme Program</div>


            <a href='{{route('admin.cme.create')}}'
                class='bg-blue-500 text-white h-10 p-2 text-sm flex items-center font-main rounded-lg'>
                <svg xmlns="http://www.w3.org/2000/svg" class="svgicon" height="1em" viewBox="0 0 448 512">
                    <style>
                        .svgicon {
                            fill: #ffffff;
                        }
                    </style>
                    <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                </svg>
                <span>Add Cme Program</span>
            </a>



        </div>
    </div>


    <div class='product-table bg-white p-3 rounded-lg mt-10 font-main font-light shadow'>

        <div class="relative overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="font-normal p-10">
                    <tr class="">
                        <th scope="col " class="p-2 font-semibold ">
                            title
                        </th>


                        <th scope="col" class="font-semibold ">
                            Start Date
                        </th>
                        <th scope="col" class="font-semibold ">
                            description
                        </th>
                        <th scope="col" class="font-semibold ">
                            organization
                        </th>
                        <th scope="col" class="font-semibold ">
                            status
                        </th>

                        <th scope="col" class="font-semibold ">
                            Actions
                        </th>
                    </tr>
                </thead>

                @foreach ($programs as $program)
                {{-- @dd($program->program) --}}
                    <tbody class="bg-white divide-y divide-gray-200 text-center">
                        <tr>
                            <td class="">
                                <div>
                                    {{ $program->title }}
                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $program->start_date }}
                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $program->description }}

                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $program->program->name }}

                                </div>
                            </td>
                            <td class="">
                                <div>
                                    @if ( $program->status == 1)
                                    <div class="">On Going</div>
                                    @else
                                    <div class="">Upcoming</div>

                                    @endif
                                    {{-- {{ $program->status }} --}}
                                </div>
                            </td>

                            <td>
                                <div class="flex p-2 justify-center items-center">


                                    <a href="{{route('admin.cme.edit',$program->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white">
                                        edit
                                    </a>

                                    <form action="{{route('admin.cme.destroy',$program->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            delete
                                        </button>
                                    </form>


                                </div>
                            </td>
                        </tr>


                    </tbody>
                @endforeach

            </table>
        </div>


    </div>


    </div>
@endsection
