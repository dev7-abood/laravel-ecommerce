@extends('main.index')
@section('container')
    <x-product.nav-product-component :slug="$slug"/>
    <livewire:product.products.show :slug="$slug"/>
@endsection
