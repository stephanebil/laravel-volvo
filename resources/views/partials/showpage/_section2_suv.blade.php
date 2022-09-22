@php
    $titleh2 = "SUV";
    
    $arrayCards = [
        [
            "img"=>"xc40.png",
            "title"=>"XC40",
            "description"=> "Micro-hybride" 
        ],
        [
            "img"=>"xc40-electric.png",
            "title"=>"XC40 Recharge",
            "description"=> "100% électrique" 
        ],
        [
            "img"=>"xc40-hybrid.png",
            "title"=>"XC40 Recharge",
            "description"=> "Hybride rechargeable" 
        ],
        [
            "img"=>"xc60.png",
            "title"=>"XC60",
            "description"=> "Micro-hybride" 
        ],
        [
            "img"=>"xc60-hybrid.png",
            "title"=>"XC60 Recharge",
            "description"=> "Hybride rechargeable" 
        ],
        [
            "img"=>"xc90.png",
            "title"=>"XC90 Recharge",
            "description"=> "Micro-hybride" 
        ],
        [
            "img"=>"xc90-hybrid.png",
            "title"=>"XC90 Recharge",
            "description"=> "Hybride rechargeable" 
        ],
      
        ];
@endphp



@include("partials.showpage.items_sections._h2")
<div class="flex flex-wrap">
    @foreach ($arrayCards as $arrayCard )
        @include("partials.showpage.items_sections._card") 
    @endforeach
</div>