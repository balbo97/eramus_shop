@extends('dashboard')

@section('dashboard_content')
    <div class="container py-3">
        <div class="row">

            <div class="col-12 mb-3">

                <div class="content d-flex align-items-center fs-3">
                    <a class="btn btn-outline-success fw-bold m-3" href="{{ Route('admin.products.create') }}" role="button">
                        <div class=""><i class="fa-solid fa-plus"></i> Aggiungi un nuovo prodotto </div>
                    </a>
                </div>
            </div>
            <div class="col-12 py-3">
                <table class="table table-warning roundedTable">
                    <thead>
                        <tr class="">

                            <th scope="col" class="fs-5">#ID</th>
                            <th scope="col" class="fs-5">Nome</th>
                            <th scope="col" class="fs-5">Descrizione</th>
                            <th scope="col" class="fs-5">Data Inserimento</th>
                            <th scope="col" class="fs-5">Tipologia</th>
                            <th scope="col" class="fs-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">

                                <td class="text-secondary-emphasis fw-bold ">{{ $product->id }}</td>
                                <td class="text-secondary-emphasis">{{ $product->name }}</td>
                                <td class="text-secondary-emphasis">{{ $product->description }}</td>
                                <td class="text-secondary-emphasis ">{{ $product->created_at->format('d-m-Y') }}</td>
                                <td class="text-secondary-emphasis ">{{ $product->type->name }}</td>

                                <td>
                                    <div class="button-container d-flex">
                                        <a href="{{ route('admin.products.show', ['product' => $product->id]) }}"
                                            class="btn btn-outline-secondary m-2">
                                            <i class="fa-solid fa-magnifying-glass"></i>

                                        </a>
                                        <a class="btn btn-outline-warning  m-2"
                                            href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                                            <i class="fa-solid fa-edit"></i>

                                        </a>

                                        <form class=" m-2"
                                            action="{{ route('admin.products.destroy', ['product' => $product['id']]) }}"
                                            method="POST"
                                            onsubmit="return confirm('Sei sicuro di voler eliminare il prodotto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i
                                                    class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>


                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
