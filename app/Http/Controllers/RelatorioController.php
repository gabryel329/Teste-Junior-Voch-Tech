<?php

namespace App\Http\Controllers;

use App\Models\CargoColaborador;
use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function colaboradores()
    {
        $colaboradores = Colaborador::with('unidade', 'cargo')->get();

        return view('relatorios.colaboradores', ['colaboradores' => $colaboradores]);
    }

    public function unidades()
    {
        $relatorio = Unidade::select('nome_fantasia', 'razao_social', 'cnpj')
            ->withCount('colaboradores')
            ->get();

        return view('relatorios.unidades', ['relatorio' => $relatorio]);
    }

    public function avaliacao()
    {
        $cargocolaboradores = CargoColaborador::with(['unidade', 'cargos'])
            ->orderByDesc('nota_desempenho')
            ->get();

        return view('relatorios.avaliacao', compact('cargocolaboradores'));
    }

}
