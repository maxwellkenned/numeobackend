<?php

namespace Numeo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Numeo\Models\inf_pessoas as Pessoa;
use Numeo\Models\conf_usuarios as Usuario;
use Numeo\Models\inf_colaboradores as Colaborador;

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

        DB::beginTransaction();

        $dados = $request->all();

        $pessoa = Pessoa::create($dados);

        $senha =  $dados['senha'] ? Hash::make($dados['senha']) : null;

        $dados["id_pessoa"] = $pessoa->id;

        $usuario = [
            'id_pessoa'=> $pessoa->id,
            'usuario'=> $pessoa->email,
            'senha'=> $senha
        ];

        $colaborador = Colaborador::create($dados);


        $user = Usuario::create($usuario);

        if ($pessoa && $colaborador && $user) {
            DB::commit();
            return response()->json(["pessoa"=>$pessoa, "colaborador"=>$colaborador, "usuario"=>$user, "status"=>true]);
        } else {
            DB::rollback();
          return response()->json(["data"=>"Erro ao cadastrar colaborador", "status"=>false]);
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
