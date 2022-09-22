<section class="px-28 mt-12">
    <div class="flex space-x-6">
        @php
            $arraySection5s = [
                [
                    "imgs5" => "offre_xc40_home (1).jpg",
                    "titles5" => "XC40 Recharge Start",
                    "texts5" => "À partir de 485€/mois(1), jusqu'au 31 décembre 2022.",
                    "buttons5" => "En savoir plus"
                ],
                  [
                    "imgs5" => "eh2110014_charging_offer_2_desktop_v2 (1).jpg",
                    "titles5" => "Recharger simplement",
                    "texts5" => "La solution de Recharge Volvo vous accompagne pour recharger chez vous et votre lieu de travail.",
                    "buttons5" => "Découvrez la solution"
                ],
            ]
        @endphp
        @foreach ($arraySection5s as $arraySection5)
            @include("partials.homepage.items_section._cardsection5")
        @endforeach
    </div>        
    <div class="mt-32 relative ">
        <div class="">
            <img src="img/pom_037_talent_sans_femme_texte_blanc_desktop3 (1).jpg" alt="XC60 Série Spéciale" class="">
        </div>
        <div class="absolute top-0 w-[45%] h-[70%] px-100 mt-[12%]">
            <h3 class="text-gray-100 text-4xl font-bold">XC60 Série Spéciale</h3>
            <p class="text-gray-100 mt-6 mb-14">Un SUV  d'exception, raffiné, suréquipé et disponible rapidement. Découvrez notre XC60 Série Spéciale imaginé pour les plus impatients.</p>
            <a href="" class="bg-gray-100 rounded px-8 py-3 uppercase font-bold">Découvrir l'offre</a>
        </div>
    </div>
</section>