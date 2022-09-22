@php
    $titleh2 = "Breaks";
    
    $arrayCards = [
        [
            "img"=>"25.webp",
            "title"=>"V60",
            "description"=> "Micro-hybride" 
        ],
        [
            "img"=>"20.webp",
            "title"=>"V60 Cross Country",
            "description"=> "100% électrique" 
        ],
        [
            "img"=>"19.webp",
            "title"=>"V60 Recharge",
            "description"=> "Hybride rechargeable" 
        ],
       
        ];
@endphp



@include("partials.showpage.items_sections._h2")
<div class="flex space-x-8">
    @foreach ($arrayCards as $arrayCard )
        @include("partials.showpage.items_sections._card") 
    @endforeach
</div>