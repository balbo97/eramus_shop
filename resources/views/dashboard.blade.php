@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-4">
                <div class="bg_gradient p-4 rounded-3 shadow">
                    <h2 class="fs-4 text_blue_primary py-2 text-center">
                        Dashboard negozio
                    </h2>

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="text_blue_primary mt-3">
                            <a href="{{ route('register.index') }}"
                                class="text-decoration-none text-reset btn btn-light p-3 w-100"><i
                                    class="fa-solid fa-users fa-xl me-md-2"></i>
                                Visualizza gli utenti
                            </a>
                        </div>
                        <div class="text_blue_primary mt-3">
                            <a href="{{ route('admin.products.index') }}"
                                class="text-decoration-none text-reset btn btn-light p-3 w-100"><i
                                    class="fa-solid fa-store fa-xl me-2"></i>
                                Visualizza i tuoi prodotti
                            </a>
                        </div>
                        <div class="text_blue_primary mt-3">
                            <a href="" class="text-decoration-none text-reset btn btn-light p-3 w-100"><i
                                    class="fa-solid fa-tag fa-xl me-md-2 "></i>
                                Visualizza le tipologie
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 m-auto col-md-9 pt-3">

                @if (Route::currentRouteName() == 'admin.dashboard')
                    <div class="row">
                        <div class="col-12">
                            <h1>Welcome back <br>{{ Auth::user()->name }}!</h1>
                        </div>
                    </div>
                @endif

                @yield('dashboard_content')
            </div>
        </div>
    </div>
@endsection
