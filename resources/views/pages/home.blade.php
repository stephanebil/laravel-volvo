

@extends('layout.layout')
@section('title', 'Accueil')

@section("content")
<div class="px-28">
    <x-titleH2 title="Toto à la montagne"/>
    <x-card.card url_img="14.jpeg" title="Hello Toto" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, itaque pariatur? Tenetur, dignissimos amet! Quam."/>
    <x-card.card url_img="14.jpeg" title="Hello Toto" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, itaque pariatur? Tenetur, dignissimos amet! Quam.">
        <p>pipi caca</p>
    </x-card.card>
</div>

@include("partials.homepage._hero")



<div class="">
    @include("partials.homepage._section1")
</div>

<div class="">
    @include("partials.homepage._section2")
</div>
<div class="">
    @include("partials.homepage._section3")
</div>

<div class="">
    @include("partials.homepage._section4")
</div>

<div class="">
    @include("partials.homepage._section5")
</div>

<div class="">
    @include("partials.homepage._section6")
</div>



@endsection