<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegistersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = Auth::user()->username;

        $registros = User::select('users.*', 'registers.*')
                        ->leftJoin('registers', 'users.id', '=', 'registers.user_id')
                        ->where('username', $username)
                        ->where('registers.created_at', '>', '2023-10-10 00:00:00')
                        ->orderBy('registers.created_at', 'desc')->get();

        return view('registros.index', compact('registros'));

    }

    public function listarSolicitacoes()
    {
        $solicitacoes = Registers::where('status', 'S')->orderBy('id')->get();

        return view('admin.registros.solicitacoes', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $agora = date('d/m/Y H:i');
        return view('registros.create')
            ->with('agora', $agora);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $code = $request->code;
        //dd($request);

        if ( $code == $user->code )
        {
            
            $registro = new Registers();
            $registro->user_id = $user->id;
            $registro->register_time = Carbon::createFromFormat('d/m/Y H:i', $request->register_time)->format('Y-m-d H:i');
            $registro->type = 'Interno';
            $registro->status = 'A';
            $registro->save();
        }
        

        return to_route('resgistros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
