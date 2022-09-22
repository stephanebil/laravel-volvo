<section class="px-28">
    <div class="">
        <div class="text-center py-16">
            <h2 class="text-lg font-bold ">Liens Utiles</h2>
        </div>
        @php
            $arraySection6s = [
                [
                    "links61" => "Concessionnaires ",
                    "links62" => "Presse ",
                ],
                [
                    "links61" => "Professionnels ",
                    "links62" => "Newsletter ",
                ]
            ]
        @endphp
        <div class="flex justify-center space-x-6">
            @foreach ($arraySection6s as $arraySection6 )
                @include("partials.homepage.items_section._cardsection6")
            @endforeach    
        </div>
    </div>
</section>