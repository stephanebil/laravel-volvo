@extends('layout.layout')
@section('title', 'Nos offres du moment')

@section("content")
<main class="px-28 py-20">    
    <h1 class="font-bold text-4xl text-center py-8">Offres du moment</h1>
    <p class="text-center text-lg text-gray-500 px-28 ">Profitez de nos offres de financement attractives et découvrez nos éditions spéciales.</p>
    <div class="pt-16">
        @include("partials.offrepage._section_offre")
    </div>
</main>
@endsection