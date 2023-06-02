<x-app-layout title="Detail Resep {{ $recipe->title }}">
    <section class="recipe-detail">
        <div class="mb-3">
            <img src="/images/recipe_images/{{ $recipe->image }}" class="w-100" alt="recipe-image">
        </div>
        <div class="mb-4">
            <h1 class="mb-2">{{ $recipe->title }}</h1>
            <h6 class="fw-normal lh-lg">{{ $recipe->description }}</h6>
        </div>
        <div class="mb-4">
            <h2>Bahan - bahan</h2>
            @foreach ($recipe->ingredients as $ingredient)
                <div class="lh-lg">{{ $ingredient }}</div>
            @endforeach
        </div>
        <div class="mb-4">
            <h2>Langkah Pembuatan</h2>
            <ol class="ps-md-4 ps-3 lh-lg">
                @foreach ($recipe->cooking_steps as $cooking_step)
                    <li>{{ $cooking_step }}</li>
                @endforeach
            </ol>
        </div>
    </section>
</x-app-layout>