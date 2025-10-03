<x-app-layout>
    <x-slot name="header">
        <div class="gradient-bg min-h-screen py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header con navegación -->
                <div class="edit-header">
                    <div class="mb-4 sm:mb-0">
                        <h1 class="edit-title">
                            ✏️ Editar Post
                        </h1>
                        <p class="edit-subtitle">Modifica la información del artículo</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('posts.show', $post->id) }}" class="back-btn-glass">
                            ← Volver al Post
                        </a>
                        <a href="{{ route('posts.index') }}" class="btn-gradient">
                            📝 Ver Todos los Posts
                        </a>
                    </div>
                </div>

                <!-- Formulario de edición -->
                <form action="{{ route('posts.update', $post->id) }}" method="post" class="edit-form-card">
                    @csrf
                    @method('put')
                    
                    <!-- Título -->
                    <div class="form-group">
                        <label for="title" class="form-label">
                            📝 Título del Post
                        </label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $post->title) }}" 
                               class="form-input" 
                               placeholder="Ingresa el título del post" 
                               required>
                        @error('title')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Contenido -->
                    <div class="form-group">
                        <label for="content" class="form-label">
                            📄 Contenido
                        </label>
                        <textarea name="content" 
                                  id="content" 
                                  class="form-textarea" 
                                  placeholder="Escribe el contenido del post" 
                                  required>{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Categoría -->
                    <div class="form-group">
                        <label for="category" class="form-label">
                            🏷️ Categoría
                        </label>
                        <input type="text" 
                               name="category" 
                               id="category" 
                               value="{{ old('category', $post->category) }}" 
                               class="form-input" 
                               placeholder="Ingresa la categoría" 
                               required>
                        @error('category')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Estado del post -->
                    <div class="form-group">
                        <label class="form-label">
                            🔄 Estado del Post
                        </label>
                        <div class="radio-container">
                            <label class="radio-label">
                                <input type="radio" 
                                       name="is_active" 
                                       value="1" 
                                       {{ old('is_active', $post->is_active) ? 'checked' : '' }}
                                       class="radio-input">
                                <span class="radio-text-active">✅ Activo</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" 
                                       name="is_active" 
                                       value="0" 
                                       {{ !old('is_active', $post->is_active) ? 'checked' : '' }}
                                       class="radio-input">
                                <span class="radio-text-inactive">❌ Inactivo</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Botones de acción -->
                    <div class="form-actions">
                        <button type="submit" class="update-btn">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Actualizar Post
                        </button>
                        
                        <a href="{{ route('posts.show', $post->id) }}" class="cancel-btn">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>