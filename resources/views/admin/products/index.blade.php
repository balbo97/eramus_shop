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

                            <th scope="col" class="fw-light fs-5">#ID</th>
                            <th scope="col" class="fw-light fs-5">Nome</th>
                            <th scope="col" class="fw-light fs-5">Descrizione</th>
                            <th scope="col" class="fw-light fs-5">Data Inserimento</th>
                            <th scope="col" class="fw-light fs-5">Tipologia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">

                                <td class="text-secondary-emphasis fw-bold ">{{ $product->name }}</td>
                                <td class="text-secondary-emphasis d-lg-table-cell d-none">{{ $product->description }}
                                </td>
                                <td class="text-secondary-emphasis ">{{ $product->created_at }}</td>
                                <td class="text-secondary-emphasis ">{{ $product->created_at }}</td>
                                <td class="text-secondary-emphasis ">{{ $product->type->name }}</td>

                                <td>
                                    <div class="button-container d-flex">
                                        <a href="" class="btn btn-outline-secondary m-2"><i
                                                class="fa-solid fa-magnifying-glass"></i></a>
                                        <a class="btn btn-outline-warning  m-2" href=""><i
                                                class="fa-solid fa-edit"></i></a>

                                        <a href="" class="btn btn-sm btn-outline-danger m-2 px-2">
                                            <i class="fa-solid fa-trash px-1 mt-2"></i>
                                        </a>

                                        {{-- @include('admin.dishes.partials.modal_delete') --}}
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
