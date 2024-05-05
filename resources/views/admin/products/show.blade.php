@extends('dashboard')

@section('dashboard_content')
    <div class="container py-4 px-2">
        <div class="row">

            <div class="col-12 col-md-7">

                <div class="dish-top-content text-start">
                    <div class="title d-flex justify-content-between align-items-center mt-md-0 mt-3">
                        <h2>{{ $product->name }}</h2>
                    </div>
                    <p class="c-gray fw-semibold open-sans">{{ $product->type->name ?? '' }}</p>
                </div>

                <div class="">
                    <p class="text-white open-sans">{{ $product->description }}</p>

                    <div class="btn-container d-flex gap-2 justify-content-center">
                        <a class="btn btn-outline-warning"
                            href="{{ route('admin.product.edit', ['product' => $product->id]) }}">MODIFICA</a>
                        <form class=" m-2" action="{{ route('admin.products.destroy', ['product' => $product['id']]) }}"
                            method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il prodotto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    @endsection
