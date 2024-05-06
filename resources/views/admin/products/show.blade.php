@extends('dashboard')

@section('dashboard_content')
    <div class="container py-4 px-2">
        <div class="row">

            <div class="col-12 col-md-7">
                <h1>Specifiche Prodotto</h1>

                <div class="dish-top-content text-start my-5">
                    <p><strong>Nome:</strong> {{ $product->name }}</p>
                    <p class=""> <strong>Tipologia:</strong> {{ $product->type->name ?? 'Nessuna tipologia' }}</p>
                    <p class=""> <strong>Descrizione:</strong> {{ $product->description }}</p>
                </div>


                <div class="btn-container d-flex gap-2">

                    <a class="btn btn-outline-warning" href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <form class="" action="{{ route('admin.products.destroy', ['product' => $product['id']]) }}"
                        method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il prodotto?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </div>


            </div>

        </div>
    @endsection
