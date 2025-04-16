<x-app-layout>
    <x-slot name="header">
        <div class="justify-between d-flex" style="display: flex">
            <h2 class="mt-2 text-xl font-semibold leading-tight text-gray-800">
                artical List
            </h2>
            <a class="px-5 py-3 text-sm text-white rounded-md bg-slate-700"
                href="{{ route('artical.create') }}">Create artical</a>
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
                        <th class="px-6 py-3 text-left">Author</th>
                        <th class="px-6 py-3 text-left">Content</th>
                        <th class="px-6 py-3 text-left">Created At</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if ($articals->isNotEmpty())
                        @foreach ($articals as $key => $artical)
                            <tr class="border-b">
                                <td class="px-6 py-3 text-left">{{ $key + 1 }}</td>
                                <td class="px-6 py-3 text-left">{{ $artical->title }}</td>
                                <td class="px-6 py-3 text-left">{{ $artical->author }}</td>
                                <td class="px-6 py-3 text-left">{{ $artical->text }}</td>
                                <td class="px-6 py-3 text-left">{{ \Carbon\Carbon::parse($artical->created_at)->format('d M, Y') }}</td>
                                <td class="px-6 py-3 text-center">
                                    <a class="px-5 py-3 text-sm text-white bg-blue-700 rounded-md"
                                        href="{{ route('artical.edit',$artical->id) }}">Edit</a>
                                    <a class="px-5 py-3 text-sm text-white bg-red-700 rounded-md"
                                        href="javascript:void(0)" onclick="deleteArtical({{ $artical->id }})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
           <div class="px-3 py-1 my-3 text-white bg-white">
            {{ $articals->links() }}
           </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
            function deleteArtical(id){
                if(confirm("are you sure to delete!")){
                    $.ajax({
                        url : '{{ route("artical.destroy") }}',
                        type : 'delete',
                        data : {id: id},
                        dataType : 'json',
                        headers : {
                            'x-csrf-token' : '{{ csrf_token() }}'
                        },
                        success : function(response){
                            window.location.href = '{{ route('artical.index') }}'
                        }
                    })
                }
            }
        </script>
    </x-slot>
</x-app-layout>
