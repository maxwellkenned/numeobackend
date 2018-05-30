<?php

use Illuminate\Database\Seeder;
use App\Models\inf_empresas as Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            "id_pessoa" => 0,
            "cnpj" => "24275625000124",
            "nome_fantasia" => "MATRIZ",
            "razao_social" => "Maxwell Kenned ME",
            "email" => "consulto.kenned@gmail.com"
        ]);
    }
}
