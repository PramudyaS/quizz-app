@extends('layouts.admin_layout')

@section('content')
    <div class="flex-inline w-full">
        <div class="bg-white pb-4 px-4 rounded-md w-full mt-5">
            <div class="flex justify-between w-full pt-6">
                <div class="flex-inline">
                    <h3 class="font-medium text-2xl">Question Category</h3>
                    <p class="text-sm">Show all list question category</p>
                </div>
                <div class="w-28">
                    <a class="bg-purple-600 px-3 py-2 text-white rounded-md float-right" href="{{  route
                    ('question_category.create')  }}">Create</a>
                </div>
            </div>
            <div class="w-full flex justify-end px-2 mt-2">
                <div class="w-full sm:w-64 inline-block relative ">
                    <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />

                    <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                        <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                            <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto mt-6">
                <table class="table-auto border-collapse w-full">
                    <thead>
                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-gray-200 ">#</th>
                            <th class="px-4 py-2 bg-gray-200 ">ID</th>
                            <th class="px-4 py-2 bg-gray-200">Name</th>
                            <th class="px-4 py-2 bg-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                        @forelse($question_categories as $category)
                        <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                            <td class="px-4 py-4">{{  $loop->index + 1  }}</td>
                            <td class="px-4 py-4">{{  $category->id }}</td>
                            <td class="px-4 py-4">{{  $category->name }}</td>
                            <td class="px-4 py-4 text-white">
                                <a href="{{  route('question_category.destroy',$category->id)  }}"
                                   class="bg-red-500 px-2 py-2 rounded-md delete-action">Delete</a>
                                <a href="{{  route('question_category.edit',$category->id)  }}" class="bg-green-500 px-2
                                 py-2 rounded-md">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-4 py-4 text-center">No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $question_categories->links() }}
        </div>
    </div>


@endsection
