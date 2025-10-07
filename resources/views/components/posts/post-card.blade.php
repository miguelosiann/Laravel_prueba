@props(['post'])

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
