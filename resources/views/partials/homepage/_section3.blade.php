<section class="px-28 mt-12">
    <div class=""> 
        @php
            $titleh2 = "Tous les modèles de Recharges";
            $spanh2 = ""
        @endphp
        @include("partials.homepage._h2")
    </div>
    <div class="flex space-x-6">
        @php
            $arraysection3s = [
                [
                    "style3s" => "crossover",
                    "title3s" => "C40 Recharge",
                    "spantitle3s" =>"100% électrique",
                    "pay3s" => "Achat à partir de ",
                    "price3s" => "44 950€",
                    "img3s"  => "c40-bev-my23-responsive (1).jpg",
                    "available3s" => "disponible en ligne",
                    "discover3s" => "En savoir plus"
                ],
                [
                    "style3s" => "suv",
                    "title3s" => "XC40 Recharge",
                    "spantitle3s" =>"100% électrique",
                    "pay3s" => "À partir de ",
                    "price3s" => "43 950€",
                    "img3s"  => "xc40-bev-my23-responsive (1).jpg",
                    "available3s" => "disponible en ligne",
                    "discover3s" => "Découvrez"
                ],[
                    "style3s" => "suv",
                    "title3s" => "xc90 Recharge",
                    "spantitle3s" =>"Hybride rechargeable",
                    "pay3s" => "À partir de ",
                    "price3s" => "90 800€",
                    "img3s"  => "XC90-phev-my24-responsive (1).jpg",
                    "available3s" => "",
                    "discover3s" => "Découvrez"
                ],[
                    "style3s" => "suv",
                    "title3s" => "X60 Recharge",
                    "spantitle3s" =>"Hybride rechargeable",
                    "pay3s" => "À partir de ",
                    "price3s" => "72 130€",
                    "img3s"  => "xc60-phev-my24-responsive (1).jpg",
                    "available3s" => "",
                    "discover3s" => "Découvrez"
                ],
            ]
        @endphp
        @foreach ($arraysection3s as $arraysection3)
            @include("partials.homepage.items_section._cardsection3")
        @endforeach
    </div>
    <div class="">
        <ul class="flex space-x-30 justify-center uppercase text-blue-500 font-bold mt-20">
            <li><a href="">recharge ></a></li>
            <li><a href="">autres motorisations ></a></li>
        </ul>
    </div>

</section>