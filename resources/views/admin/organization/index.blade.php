@extends('admin.layout.main')

@section('body')
    <div class="px-5 bg-background w-full">

        <div class="flex justify-between">

            <div class="text-2xl font-bold">Society/Organization</div>


            <a href='{{ route('admin.organization.create') }}'
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
                <span>Add Society/Organization</span>
            </a>



        </div>
    </div>


    <div class='product-table bg-white p-3 rounded-lg mt-10 font-main font-light shadow'>

        <div class="relative overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="font-normal p-10">
                    <tr class="">
                        <th scope="col " class="p-2 font-semibold ">
                            name
                        </th>


                        <th scope="col" class="font-semibold ">
                            location
                        </th>
                        <th scope="col" class="font-semibold ">
                            phone
                        </th>
                        <th scope="col" class="font-semibold ">
                            email
                        </th>

                        <th scope="col" class="font-semibold ">
                            Actions
                        </th>
                    </tr>
                </thead>

                @foreach ($organizations as $organization)
                    <tbody class="bg-white divide-y divide-gray-200 text-center">
                        <tr>
                            <td class="">
                                <div>
                                    {{ $organization->name }}
                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $organization->location }}
                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $organization->phone }}
                                </div>
                            </td>
                            <td class="">
                                <div>
                                    {{ $organization->email }}
                                </div>
                            </td>

                            <td>
                                <div class="flex p-2 justify-center items-center">


                                    <a href="{{route('admin.organization.edit',$organization->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white">
                                        edit
                                    </a>

                                    <form action="{{route('admin.organization.destroy',$organization->id)}}" method="post">
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
