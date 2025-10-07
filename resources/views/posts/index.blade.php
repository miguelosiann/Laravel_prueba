<x-app-layout>
    <x-slot name="header">
        <div class="gradient-bg min-h-screen py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header con título y botón -->
                <x-posts.header />

                <!-- Mensaje de éxito -->
                <x-posts.success-alert />

                <!-- Lista de posts -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @forelse($posts as $post)
                        <x-posts.post-card :post="$post" />
                    @empty
                        <x-posts.empty-state />
                    @endforelse
                </div>

                <!-- Paginación -->
                <x-posts.pagination :posts="$posts" />
            </div>
        </div>
    </x-slot>
</x-app-layout>
