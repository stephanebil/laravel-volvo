@extends('layout.layout')
@section('title', 'Voir nos voitures')

@section("content")
<main class="px-28">
    <div class="flex justify-between px-20 py-20">
        <h1 class="text-2xl font-black">Configurez votre Volvo</h1>
        <p class="text-gray-500 w-[35%]">Selon les modèles, nos voitures sont disponibles en version 100% électrique, hybride rechargeable (essence) et micro hybride (essence ou diesel).</p>
    </div>
    <div class="">
        @include("partials.showpage._nav_show")
    </div>
    <section class="crossover">
       @include("partials.showpage._section1_crossover")
    </section>
    <section class="suv">
        @include("partials.showpage._section2_suv")
    </section>
    <section class="berlines">
        @include("partials.showpage._section3_berlines")
    </section>
    <section class="breaks">
        @include("partials.showpage._section4_breaks")
    </section>
    <section>
        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatum ullam labore molestias sequi consequuntur neque ipsa, fugiat deserunt tenetur. Consequuntur voluptate at ullam, illum obcaecati officia reprehenderit eveniet porro a possimus quisquam voluptates ex, eum, ea harum! Neque enim tempora autem laborum obcaecati nostrum quae, voluptatibus quo ea! Dolor, labore. Dignissimos voluptate accusamus cupiditate laudantium eveniet at ratione, unde quidem rerum corporis aut nobis exercitationem assumenda, consequuntur incidunt autem porro dolores aperiam ipsam deleniti? Voluptas officiis totam rem eveniet, vitae iusto eligendi aperiam maxime commodi ipsum, reprehenderit sequi adipisci quis maiores optio et. Saepe, laudantium iure facere eveniet ullam quaerat officiis ut? Aperiam, animi libero magnam iste enim cupiditate magni, maiores mollitia expedita similique ad cum iusto porro. Fugiat consequuntur voluptatibus magnam rem modi ipsum cumque libero reiciendis quaerat, doloremque facere vero ipsam aperiam id rerum possimus quos, quae porro unde? Quisquam quis sequi sed odio nihil odit, vel illo maiores fugit? Amet dolorem tenetur quisquam doloribus consequuntur aliquid obcaecati quam quod quidem aspernatur perferendis quae cumque nisi blanditiis dicta laboriosam, maxime molestias illum, corporis perspiciatis facilis repellendus alias! Quis illum atque nihil. Neque quaerat ut sapiente id laboriosam et! Doloribus harum sunt, itaque vitae laboriosam unde nemo? Et odio temporibus !</p>
    </section>

   
</main>
@endsection