<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('portfolio.update', $portfolioItem->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="title" :value="__('Project Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $portfolioItem->title)" required />
                    </div>

                    <div>
                        <x-input-label for="tech_stack" :value="__('Tech Stack (e.g., PHP, MySQL, Tailwind)')" />
                        <x-text-input id="tech_stack" class="block mt-1 w-full" type="text" name="tech_stack" :value="old('tech_stack', $portfolioItem->tech_stack)" required />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" rows="4" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('description', $portfolioItem->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="live_url" :value="__('Live URL (Optional)')" />
                            <x-text-input id="live_url" class="block mt-1 w-full" type="url" name="live_url" :value="old('live_url', $portfolioItem->live_url)" placeholder="https://example.com" />
                        </div>
                        <div>
                            <x-input-label for="github_url" :value="__('GitHub Repository URL (Optional)')" />
                            <x-text-input id="github_url" class="block mt-1 w-full" type="url" name="github_url" :value="old('github_url', $portfolioItem->github_url)" placeholder="https://github.com/..." />
                        </div>
                    </div>

                    <div>
                        <x-input-label for="image_url" :value="__('External Image URL (Optional)')" />
                        <x-text-input id="image_url" class="block mt-1 w-full" type="url" name="image_url" :value="old('image_url', Str::startsWith($portfolioItem->image_path, 'http') ? $portfolioItem->image_path : '')" placeholder="https://imgur.com/..." />
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pasting a URL here will replace the current image and take priority over the file upload.</p>
                    </div>

                    <div class="relative flex items-center">
                        <div class="flex-grow border-t border-gray-600"></div><span class="flex-shrink mx-4 text-gray-400 text-sm">OR</span><div class="flex-grow border-t border-gray-600"></div>
                    </div>

                    <div>
                        <x-input-label for="image" :value="__('Upload New Project Image (Optional)')" />
                        <input id="image" type="file" name="image" class="block mt-1 w-full text-sm text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-500">
                        @if ($portfolioItem->image_path)
                            <div class="mt-4">
                                <label class="block font-medium text-sm text-slate-300">Current Image:</label>
                                @php $imageUrl = Str::startsWith($portfolioItem->image_path, 'http') ? $portfolioItem->image_path : asset('storage/' . $portfolioItem->image_path); @endphp
                                <img src="{{ $imageUrl }}" alt="{{ $portfolioItem->title }}" class="mt-2 h-32 w-auto rounded-md border border-slate-700">
                            </div>
                        @endif
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Update Project') }}</x-primary-button>
                        <a href="{{ route('portfolio.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>