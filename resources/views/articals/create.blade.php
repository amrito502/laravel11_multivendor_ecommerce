<x-app-layout>
    <x-slot name="header">
        <div class="justify-between d-flex" style="display: flex">
            <h2 class="mt-2 text-xl font-semibold leading-tight text-gray-800">
                Create Artical
            </h2>
            <a class="px-5 py-3 text-sm text-white rounded-md bg-slate-700" href="{{ route('artical.index') }}">Artical Lists</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('articals.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="title" class="text-lg font-medium">Title</label>
                            <div class="my-3">
                                <input type="text" value="{{ old('title') }}" name="title" placeholder="Enter title" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('title')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <label for="" class="text-lg font-medium">Content</label>
                            <div class="my-3">
                                <textarea name="text" placeholder="content" id="text" class="w-1/2 border-gray-300 rounded-lg shadow-sm"></textarea>
                                @error('text')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <label for="author" class="text-lg font-medium">author</label>
                            <div class="my-3">
                                <input type="text" value="{{ old('author') }}" name="author" placeholder="Enter author" class="w-1/2 border-gray-300 rounded-lg shadow-sm">
                                @error('author')
                                    <p class="font-medium text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="px-5 py-3 text-sm text-white rounded-md bg-slate-700">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
