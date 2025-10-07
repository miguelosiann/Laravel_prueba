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
