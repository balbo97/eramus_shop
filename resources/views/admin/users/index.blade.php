@extends('dashboard')

@section('dashboard_content')
    <div class="container py-3">
        <div class="row">

            <div class="col-12 mb-3 d-flex justify-content-between align-items-center">

                <h1>Lista Utenti</h1>
                <div class="content d-flex align-items-center fs-3">
                    <a class="btn btn-outline-success fw-bold m-3" href="{{ Route('admin.products.create') }}" role="button">
                        <div class=""><i class="fa-solid fa-user-plus"></i></i> Aggiungi un nuovo utente </div>
                    </a>
                </div>
            </div>
            <div class="col-12 py-3">
                <table class="table table-warning roundedTable">
                    <thead>
                        <tr class="">

                            <th scope="col" class="fs-5">#ID</th>
                            <th scope="col" class="fs-5">Nome</th>
                            <th scope="col" class="fs-5">Cognome</th>
                            <th scope="col" class="fs-5">Data di Nascita</th>
                            <th scope="col" class="fs-5">Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="">

                                <td class="text-secondary-emphasis fw-bold ">{{ $user->id }}</td>
                                <td class="text-secondary-emphasis">{{ $user->name }}</td>
                                <td class="text-secondary-emphasis">{{ $user->surname }}</td>
                                <td class="text-secondary-emphasis ">{{ $user->birthdate }}</td>
                                <td class="text-secondary-emphasis">{{ $user->email }}</td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
