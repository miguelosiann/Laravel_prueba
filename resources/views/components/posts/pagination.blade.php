@props(['posts'])

<!-- Paginación -->
<div class="mt-12 flex justify-center">
    {{ $posts->links() }}
</div>
