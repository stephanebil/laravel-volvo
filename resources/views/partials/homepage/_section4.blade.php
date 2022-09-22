<section class="px-28 mt-12">
    <div class="">    
        @php
            $titleh2 = "Pourquoi choisir Volvo ?";
            $spanh2 = ""
        @endphp
        @include("partials.homepage._h2")
    </div>

    <div class="">
        <img src="img/homepage-whyvolvo-desktop-16x9.jpg" alt="Volvo Family" class="">
    </div>
    <div class="flex justify-between mt-6">
        @php
            $arraySection4s = [
                [
                    "titles4"=> "Développer la mobilité",
                    "texts4"=> "Nous réinventons la mobilité. Choisissez une volvo quand vous le voulez, comme vous le voulez."
                ],
                [
                    "titles4"=> "L'avenir est électrique",
                    "texts4"=> "Nous allons développer un modèle électrique pour toutes nos voitures afin de vous aider à réduire votre impact environnemental."
                ],
                [
                    "titles4"=> "Protéger ce qui est important",
                    "texts4"=> "Nous sommes fiers de notre patrimoine en matière de sécurité. nous continuerons d'innover pour protéger ce qui est important."
                ],
            ]
        @endphp
        @foreach ($arraySection4s as $arraySection4)
            @include("partials.homepage.items_section.-cardsection4")
        @endforeach
    </div>
    <div class="text-center mt-20">
        <a href="" class=" text-blue-500 font-extrabold text-center uppercase border-2 border-blue-500 p-4 rounded-md ">En savoir plus sur Volvo</a>
    </div>
</section>