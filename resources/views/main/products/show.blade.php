@extends('main.index')
@section('container')
    <x-product.nav-product-component :slug="$slug"/>
    <livewire:product.products-livewire :slug="$slug"/>
@endsection
