@extends('main.index')
@section('container')
<x-product.nav-product-component :slug="$catSlug"/>
<livewire:product.single-product-livewire :slug="$slug"/>
<br/><br/><br/>
@endsection
