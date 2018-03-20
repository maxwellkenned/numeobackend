<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\inf_pessoas as Pessoa;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaborador = DB::table('inf_colaboradores')->pluck('id_pessoa');
        $clientes = DB::table('inf_pessoas')->whereNotIn('id_pessoa', $colaborador)->get();
        return response()->json($clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $dados = $request->all();
      $pessoa = Pessoa::create($dados);
      if($pessoa){
        return response()->json(["cliente"=>$pessoa, "status"=>true]);
      }else{
        return response()->json(["data"=>"Erro ao cadastrar cliente", "status"=>false]);
      }
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
