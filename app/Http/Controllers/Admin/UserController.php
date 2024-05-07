<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.users.create', compact('users'));
    }

    public function store(StoreUserRequest $request)
    {
        // Recupero i dati inviati dal form
        $form_data = $request->all();

        // Hash della password
        $form_data['password'] = Hash::make($form_data['password']);

        // Creo una nuova istanza del model User
        $user = new User();

        // Riempio gli altri campi con la funzione fill()
        $user->fill($form_data);

        // Salvo il record sul database
        $user->save();

        // Effettuo il redirect alla view index degli utenti
        return redirect()->route('admin.users.index');
    }
}
