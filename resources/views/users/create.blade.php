{{-- <x-app-layout>
    <x-slot name="header">
        <div class="justify-between d-flex" style="display: flex">
            <h2 class="mt-2 text-xl font-semibold leading-tight text-gray-800">
                Create User
            </h2>
            <a class="px-5 py-3 text-sm text-white rounded-md bg-slate-700" href="{{ route('users.index') }}">Users</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="" class="text-lg font-medium">Name</label>
                            <div class="my-3">
                                <input type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('name')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <label for="" class="text-lg font-medium">Email</label>
                            <div class="my-3">
                                <input type="text" value="{{ old('email') }}" name="email" placeholder="Enter email" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('email')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Password</label>
                            <div class="my-3">
                                <input type="password" value="{{ old('password') }}" name="password" placeholder="Enter password" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('password')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Confirm Password</label>
                            <div class="my-3">
                                <input type="password" value="{{ old('confirm_password') }}" name="confirm_password" placeholder="Enter confirm password" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('confirm_password')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            @if ($roles-> isNotEmpty())
                                    @foreach ($roles as $key=>$role)
                                        <div class="my-3" style="cursor: pointer;">
                                            <input style="cursor: pointer;" type="checkbox" id="role-{{ $role->name }}" name="role[]" value="{{ $role->name }}" class="rounded">
                                            <label style="cursor: pointer;" for="role-{{ $role->name }}">{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                @endif
                            <button class="px-5 py-3 text-sm text-white rounded-md bg-slate-700">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('admin.master')

@section('admin')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Create User</h2>
        <a href="{{ route('users.index') }}" class="btn btn-dark">
            <i class="bi bi-arrow-left"></i> Back to Users
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header text-white" style="background: #9718D3;">
            <h5 class="mb-0 text-white">New User Details</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post">
                @csrf

                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-3">
                    <label for="confirm_password" class="form-label fw-semibold">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password">
                    @error('confirm_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Roles (Checkboxes) --}}
                @if ($roles->isNotEmpty())
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Assign Roles</label>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach ($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="{{ $role->name }}" id="role-{{ $role->name }}">
                                    <label class="form-check-label" for="role-{{ $role->name }}">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Submit --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-plus-lg"></i> Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

