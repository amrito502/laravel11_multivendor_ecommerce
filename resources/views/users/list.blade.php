{{-- <x-app-layout>
    <x-slot name="header">
        <div class="justify-between d-flex" style="display: flex">
            <h2 class="mt-2 text-xl font-semibold leading-tight text-gray-800">
                User List
            </h2>
            <a class="px-5 py-3 text-sm text-white rounded-md bg-slate-700"
                href="{{ route('users.create') }}">Create user</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-message></x-message>
            <table class="w-full pb-3 mb-5">
                <thead class="bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Roles</th>
                        <th class="px-6 py-3 text-left">Created At</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if ($users->isNotEmpty())
                        @foreach ($users as $key => $user)
                            <tr class="border-b">
                                <td class="px-6 py-3 text-left">{{ $key + 1 }}</td>
                                <td class="px-6 py-3 text-left">{{ $user->name }}</td>
                                <td class="px-6 py-3 text-left">{{ $user->email }}</td>
                                <td class="px-6 py-3 text-left">{{ $user->roles->pluck('name')->implode(', ') }}</td>
                                <td class="px-6 py-3 text-left">{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}</td>
                                <td class="px-6 py-3 text-center">
                                    <a class="px-5 py-3 text-sm text-white bg-blue-700 rounded-md"
                                        href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    <a class="px-5 py-3 text-sm text-white bg-red-700 rounded-md"
                                        href="javascript:void(0)" onclick="deletePermission({{ $user->id }})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
           <div class="px-3 py-1 my-3 text-white bg-white">
            {{ $users->links() }}
           </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
            function deletePermission(id){
                if(confirm("are you sure to delete!")){
                    $.ajax({
                        url : '{{ route("users.destroy") }}',
                        type : 'delete',
                        data : {id: id},
                        dataType : 'json',
                        headers : {
                            'x-csrf-token' : '{{ csrf_token() }}'
                        },
                        success : function(response){
                            window.location.href = '{{ route('users.index') }}'
                        }
                    })
                }
            }
        </script>
    </x-slot>
</x-app-layout> --}}

@extends('admin.master')

@section('admin')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">User List</h2>
        <a href="{{ route('users.create') }}" class="btn btn-dark">
            <i class="bi bi-plus-circle"></i> Create User
        </a>
    </div>

    {{-- Flash Message --}}
    @include('components.message')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isNotEmpty())
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary me-2">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <button onclick="deleteUser({{ $user->id }})" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center text-muted">No users found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    function deleteUser(id) {
        if (confirm("Are you sure you want to delete this user?")) {
            $.ajax({
                url: '{{ route("users.destroy") }}',
                type: 'DELETE',
                data: { id: id },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (response) {
                    window.location.href = '{{ route("users.index") }}';
                },
                error: function (err) {
                    alert('Something went wrong!');
                }
            });
        }
    }
</script>
@endsection

