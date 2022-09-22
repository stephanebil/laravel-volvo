@php
    $titleh2 = "Crossover ";
    
    $arrayCards = [
        [
            "img"=>"c40-electric.png",
            "title"=>"C40 Recharge",
            "description"=> "100% électrique" 
        ],
       
        ];
@endphp



@include("partials.showpage.items_sections._h2")
<div class="flex flex-wrap space-x-8">
    @foreach ($arrayCards as $arrayCard )
        @include("partials.showpage.items_sections._card") 
    @endforeach
</div>