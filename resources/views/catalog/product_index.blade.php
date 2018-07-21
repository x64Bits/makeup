@extends('catalog.template')
@section('title', 'Inicio')
@section('content')
<div class="pure-g">
    @foreach ( $products as $product )
        <div class="pure-u-1-4">
            <div class="l-box product_card">
                <a target="_blank" href="/product_show/{{ $product->id }}" class="product_container">
                    <div class="image_container">
                        <img src="/{{ $product->image_path }}">
                    </div>
                    <h5>
                        {{ str_limit($product->name, 25)}} 
                        - 
                        {{ $product->code }}
                    </h5>
                    <p>{{ $product->price }}COP</p>
                </a>
             </div>
        </div>
    @endforeach
</div>
<div class="pure-g">
    {{ $products->links() }}
</div>
@endsection()