{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Salary for User') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    <table>--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Sn number</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Email</th>--}}
{{--                            <th>Role</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($salaries as $salary)--}}
{{--                            <tr>--}}
{{--                                <td>{{$loop->index + 1}}</td>--}}
{{--                                <td>{{$salary->name}}</td>--}}
{{--                                <td>{{$user->email}}</td>--}}
{{--                                <td>--}}
{{--                                    @foreach ($user->roles as $role)--}}
{{--                                        {{$role->name}} {{!$loop->last ? ',' : ''}}--}}
{{--                                    @endforeach--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    --}}{{----}}{{-- <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-dark"> view</a> --}}
{{--                                    --}}{{----}}{{-- <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-dark"> Edit</a> --}}
{{--                                    <form action=""></form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

@extends('products.layout')

@section('content')

    <div class="card mt-5">
        <h2 class="card-header">Laravel 11 CRUD Example from scratch - ItSolutionStuff.com</h2>
        <div class="card-body">

            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('salary.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>
{{--                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">--}}

{{--                                <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>--}}

{{--                                <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>--}}

{{--                                @csrf--}}
{{--                                @method('DELETE')--}}

{{--                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
                </tbody>

            </table>

            {!! $products->links() !!}

        </div>
    </div>
@endsection
