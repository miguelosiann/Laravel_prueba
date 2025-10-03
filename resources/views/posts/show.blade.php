<x-app-layout>
    <x-slot name="header">
        <div class="gradient-bg min-h-screen py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header con navegación -->
                <div class="show-header">
                    <div class="mb-4 sm:mb-0">
                        <h1 class="show-title">
                            📄 Detalle del Post
                        </h1>
                        <p class="show-subtitle">Información completa del artículo</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('posts.index') }}" class="back-btn-glass">
                            ← Volver a Posts
                        </a>
                        @if($post->is_active)
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn-gradient">
                                ✏️ Editar Post
                            </a>
                        @endif
                    </div>
                </div>

                @if ($post->is_active)
                    <!-- Post activo -->
                    <div class="post-detail-card">
                        <!-- Título del post -->
                        <div class="mb-8">
                            <h2 class="post-detail-title">
                                {{ $post->title }}
                            </h2>
                            
                            <!-- Meta información -->
                            <div class="post-meta-container">
                                <span class="category-badge">
                                    📂 {{ $post->category }}
                                </span>
                                <span class="date-badge">
                                    📅 {{ $post->published_at ? $post->published_at->format('d M Y, H:i') : 'Sin fecha' }}
                                </span>
                                <span class="status-badge">
                                    ✅ Activo
                                </span>
                            </div>
                        </div>

                        <!-- Contenido del post -->
                        <div class="post-content-container">
                            <div class="post-content-box">
                                <p class="post-content-text">
                                    {{ $post->content }}
                                </p>
                            </div>
                        </div>

                        <!-- Botones de acción -->
                        <div class="action-buttons-container">
                            <div class="action-buttons">
                                <a href="{{ route('posts.edit', $post->id) }}" class="edit-btn">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Editar Post
                                </a>
                                
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirm('¿Estás seguro de eliminar este post?')">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Eliminar Post
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Post inactivo -->
                    <div class="inactive-card">
                        <div class="inactive-icon">⚠️</div>
                        <h3 class="inactive-title">Post No Disponible</h3>
                        <p class="inactive-message">
                            Este post no está activo en este momento. El contenido no está disponible para visualización.
                        </p>
                        <div class="inactive-actions">
                            <a href="{{ route('posts.index') }}" class="btn-gradient">
                                ← Volver a Posts
                            </a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="activate-btn">
                                ✏️ Activar Post
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </x-slot>
</x-app-layout>
