@extends('admin.layout.main')

@section('body')
    <div class="px-5 bg-background w-full">

        <div class="flex justify-between">

            <div class="text-2xl font-bold">Registered User</div>


            {{-- <a href='{{route('admin.cme.create')}}'
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
            </a> --}}



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
                        <th scope="col " class="p-2 font-semibold ">
                            email
                        </th>


                        <th scope="col" class="font-semibold ">
                            Cme Program
                        </th>
                    

                        <th scope="col" class="font-semibold ">
                            Actions
                        </th>
                    </tr>
                </thead>

              @foreach ($cme as $cmes )
                
                  <tbody class="bg-white divide-y divide-gray-200 text-center">
                      <tr>
                          <td class="">
                           {{ $cmes->member->name}}
                          </td>
                          <td class="">
                           {{ $cmes->member->email}}
                              
                          </td>
                          <td class="">
                              <div>
                                  {{$cmes->cme->title}}
                              </div>
                          </td>
                        

                         
                      </tr>


                  </tbody>
              @endforeach
                {{-- @endforeach --}}

            </table>
        </div>


    </div>


    </div>
@endsection
