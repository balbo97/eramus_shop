@extends('dashboard')

@section('dashboard_content')
    <div class="container py-3">
        <div class="row">

            <div class="col-12 mb-3 d-flex justify-content-between align-items-center">

                <h1>Lista Tipologie</h1>

            </div>
            <div class="col-12 py-3">
                <table class="table table-warning roundedTable">
                    <thead>
                        <tr class="">

                            <th scope="col" class="fs-5">#ID</th>
                            <th scope="col" class="fs-5">Nome</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr class="">

                                <td class="text-secondary-emphasis fw-bold ">#{{ $type->id }}</td>
                                <td class="text-secondary-emphasis">{{ $type->name }}</td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
