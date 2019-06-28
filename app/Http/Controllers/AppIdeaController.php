<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\idea;
//importar o modelo categoria
use App\Categoria;

//Importando a classe de Validação
use App\Http\Requests\AppIdea;

class AppIdeaController extends Controller
{
    public function index()
    {
        //$dados = DB::select('SELECT * FROM ideas');
        $dados = idea::all();
        return view('index')->with('ideas',$dados);

    }

    //formulário para adicionar
    public function formAdicionar()
    {
        $categorias = Categoria::all();
        return view('formAdicionar')->with('categorias', $categorias);
    }

    public function adicionar(AppIdea $request)
    {
        //$autor = $request->input('autor');

       // $texto = $request->input('texto');

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
