<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manage Portfolio') }}
            </h2>
            <a href="{{ route('portfolio.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                + Add New Project
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-100 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tech Stack</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($items as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $item->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->tech_stack }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('portfolio.edit', $item->id) }}" class="text-indigo-600 dark:text-indigo-400 hover:underline mr-4">Edit</a>
                                        <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Delete this project?')" class="text-red-600 dark:text-red-400 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">No portfolio items added yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>