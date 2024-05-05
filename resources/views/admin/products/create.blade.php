@extends('dashboard')

@section('dashboard_content')
    <form id="storeForm" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="container py-5">
            <div class="row">

                <div class="col-12 d-flex justify-content-end">

                    <a href=" {{ route('admin.products.index') }}" class="btn btn-outline-danger">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div id="storeForm-errors" class="mb-4 d-flex flex-column gap-2"></div>
                <div class="col-12mb-4 text-center">
                    <h1>Aggiungi un nuovo prodotto</h1>

                </div>

                <div class="col-6 text-white">

                    <div class="form-group mb-2">
                        <label for="name" class="control-label m-1 open-sans">Nome: *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Nome del prodotto" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="description" class="control-label m-1 open-sans">Descrizione: *</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Inserisci qui la descrizione del prodotto" cols="100" rows="5" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="type_id" class="control-label m-1 open-sans">Tipologia del prodotto:</label>
                        <select class="open-sans form-select @error('type_id') is-invalid @enderror" id="type_id"
                            name="type_id">
                            <option value="">Seleziona una tipologia</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-outline-success btn-lg w-50">Aggiungi</button>
                    </div>

                </div>
            </div>
        </div>

    </form>
@endsection
