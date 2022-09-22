@props([
    'url_img',
    'title',
    'description'
])

<div class="max-w-sm">
    <img src="img/{{ $url_img }}" alt="{{ $title }}" class="">
    <div class="">
        <p>{{ $title }}Titre</p>
        <p>{{ $description }}</p>
    </div>
    <div class="bg-gray-100 p-4">
        {{ $slot }}

    </div>
</div>