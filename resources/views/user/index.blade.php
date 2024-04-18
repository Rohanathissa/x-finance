{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

{{-- <h1>All User</h1> --}}

{{-- <a href="{{route('user.create')}}" class="btn btn-dark mb-2">Add user</a> --}}



{{-- @endsection --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
                        <thead> 
                           <tr>
                               <th>Sn number</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Role</th>
                               <th>Action</th>
                           </tr>
                       </thead> 
                     <tbody> 
                           @foreach ($users as $user)
                           <tr>
                               <td>{{$loop->index + 1}}</td>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td>
                                   @foreach ($user->roles as $role)
                                       {{$role->name}} {{!$loop->last ? ',' : ''}}
                                   @endforeach    
                               </td>
                               <td>
                                   {{-- <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-dark"> view</a> --}}
                                   {{-- <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-dark"> Edit</a> --}}
                                   <form action=""></form>
                               </td>
                           </tr>
                               
                           @endforeach
                       </tbody> 
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>