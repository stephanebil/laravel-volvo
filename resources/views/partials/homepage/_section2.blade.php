<section class="px-28 mt-12">
    <div class="">
        @php
            $titleh2 = "Models disponibles ";
            $spanh2 = ""
        @endphp
        @include("partials.homepage._h2")
    </div>
    <div class="flex space-x-6"> 
        @php
            $arraySection2s = [
                [
                    "imgs2"=>"11.webp",
                    "alts2" =>" volo section 2",
                    "numberseries2" =>"40",
                    "titles2" =>"Débranchez, à vous de jouer",
                    "prices2" =>"52 050€"
                ],
                [
                    "imgs2"=>"7.webp",
                    "alts2" =>" volo section 2",
                    "numberseries2" =>"60",
                    "titles2" =>"La route vous appartient, découvrez le monde",
                    "prices2" =>"72 130€"
                ],
            ]
        @endphp
        @foreach ($arraySection2s as $arraySection2)
            @include('partials.homepage.items_section._cardsection2')
        @endforeach 
          
    </div>

</section>