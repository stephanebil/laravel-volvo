@php
    $titleh2 = "Berlines";
    
    $arrayCards = [
        [
            "img"=>"s60.png",
            "title"=>"S60",
            "description"=> "Micro-Hybride" 
        ],
        [
            "img"=>"s60-hybrid.png",
            "title"=>"S60 Recharge",
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