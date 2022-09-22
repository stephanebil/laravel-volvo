@php
    $arraySection5s = [
        [
            "imgs5" => "sup00039.jpg",
            "titles5" => "Particuliers",
            "texts5" => "",
            "buttons5" => "voir les offres"
        ],
            [
            "imgs5" => "sup00053.jpg",
            "titles5" => "Professionnels",
            "texts5" => "",
            "buttons5" => "voir les offres"
        ],
    ]
@endphp


<section class="px-28 mt-12">
    <div class="flex space-x-6">
        
        @foreach ($arraySection5s as $arraySection5)
            @include("partials.offrepage.items_section._card_offre")
        @endforeach
    </div>        
    
</section>