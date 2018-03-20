<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\inf_pessoas as Pessoa;
use App\Models\conf_usuario as Usuario;
use App\Models\inf_colaboradores as Colaborador;

class ColaboradorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $dados = Colaborador::join('inf_pessoas', 'inf_colaboradores.id_pessoa', '=', 'inf_pessoas.id_pessoa')
                  ->leftJoin('inf_empresas', 'inf_colaboradores.id_empresa', '=', 'inf_empresas.id_empresa')
                  ->select('inf_colaboradores.*', 'inf_pessoas.*', 'inf_empresas.nome_fantasia')
                  ->orderBy('id_colaborador')
                  ->get();

        return response()->json($dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $dados = $request->all();
      $pessoa = Pessoa::create($dados);
      $senha =  $dados['senha'] ? Hash::make($dados['senha']) : null;
      if($pessoa){
        $dados["id_pessoa"] = $pessoa->id;
        $colaborador = Colaborador::create($dados);
        $usuario = [
          'id_pessoa'=> $pessoa->id,
          'usuario'=> $pessoa->email,
          'senha'=> $senha
        ];
        $user = Usuario::create($usuario);
        if($colaborador){
          return response()->json(["pessoa"=>$pessoa, "colaborador"=>$colaborador, "usuario"=>$user, "status"=>true]);
        }else{
          return response()->json(["data"=>"Erro ao cadastrar colaborador", "status"=>false]);
        }
      }else{
        return response()->json(["data"=>"Erro ao cadastrar pessoa", "status"=>false]);
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
