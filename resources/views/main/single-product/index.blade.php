@extends('main.index')
@section('container')
<x-product.single.nav-product-component/>
<livewire:product.single.show :slug="$slug"/>
<br/><br/><br/>
@endsection
