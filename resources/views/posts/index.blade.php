<x-app-layout>
    <x-slot name="header">
        <div class="gradient-bg min-h-screen py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header con título y botón -->
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12">
                    <div class="mb-6 lg:mb-0">
                        <h1 class="text-5xl font-bold text-white mb-4">
                            📝 Blog Posts
                        </h1>
                        <p class="text-cyan-100 text-xl">Descubre nuestros últimos artículos y contenido</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('posts.create') }}" class="btn-gradient inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Crear Nuevo Post
                        </a>
                    </div>
                </div>

                <!-- Mensaje de éxito -->
                @if(session('success'))
                    <div class="alert-success mb-8">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                <!-- Lista de posts -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @forelse($posts as $post)
                        <div class="glass-card-white card-hover p-6">
                            <!-- Header del post -->
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-3">
                                    {{ Str::limit($post->content, 120) }}
                                </p>
                            </div>
                            
                            <!-- Meta información -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="category-badge">
                                    {{ $post->category }}
                                </span>
                                <span class="date-badge">
                                    {{ $post->created_at->format('d M Y') }}
                                </span>
                            </div>
                            
                            <!-- Botones de acción -->
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('posts.show', $post->id) }}" 
                                   class="flex-1 bg-blue-50 hover:bg-blue-100 text-blue-700 font-medium py-2 px-4 rounded-lg text-center transition-colors duration-200">
                                    👁️ Ver
                                </a>
                                <a href="{{ route('posts.edit', $post->id) }}" 
                                   class="flex-1 bg-yellow-50 hover:bg-yellow-100 text-yellow-700 font-medium py-2 px-4 rounded-lg text-center transition-colors duration-200">
                                    ✏️ Editar
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-full btn-danger-gradient text-center" 
                                            onclick="return confirm('¿Estás seguro de eliminar este post?')">
                                        🗑️ Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full">
                            <div class="glass-card-white text-center py-16">
                                <div class="text-6xl mb-6">📝</div>
                                <h3 class="text-2xl font-bold text-gray-700 mb-4">No hay posts disponibles</h3>
                                <p class="text-gray-500 mb-8">¡Crea tu primer post para comenzar a compartir contenido!</p>
                                <a href="{{ route('posts.create') }}" class="btn-gradient inline-flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Crear Primer Post
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
