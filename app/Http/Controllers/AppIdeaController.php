<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\idea;

class AppIdeaController extends Controller
{
    public function index()
    {
        $dados = DB::select('SELECT * FROM ideas');
        return view('index')->with('ideas',$dados);

    }

    //formulário para adicionar
    public function formAdicionar()
    {
        return view('formAdicionar');
    }

    public function adicionar(Request $request)
    {
        $autor = $request->input('autor');

        $texto = $request->input('texto');

        idea::create($request->input());
        return redirect()->action('AppIdeaController@index');
    }

    public function excluir($id)
    {
        idea::destroy($id);
        return redirect()->action('AppIdeaController@index');

    }

    public function formEditar($id)
    {
        $idea = idea::find($id);

        return view('formEditar')->with('idea',$idea);
    }
    public function editar(Request $request)
    {
        $ideia = idea::find($request->id);
        $ideia->autor = $request->autor;
        $ideia->texto = $request->texto;

        $ideia->save();

        return redirect()->action('AppIdeaController@index');
    }


}
