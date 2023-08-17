<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProduto;
use Illuminate\Support\Facades\DB;

class TipoProdutoController extends Controller
{
    /**
     * Run when a new instance is done
     * Roda quando um nova instancia é feita
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Método index de TipoProdutoController foi chamado";
        //$tipoProdutos = TipoProduto::all();
        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        //print_r($tipoProdutos);
        return view('TipoProduto/index')->with('tipoProdutos', $tipoProdutos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TipoProduto/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoProduto = new TipoProduto();
        $tipoProduto->descricao = $request->descricao;
        $tipoProduto->save();
        // Roda o método index para atualizar a página
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoProduto = TipoProduto::find($id);
        if(isset($tipoProduto))
            return view("TipoProduto/show")->with("tipoProduto", $tipoProduto);
        #TODO Retornar página de erro.
        return view("messagepage")->with("message", "@Show: O tipo produto $id não foi encontrado"); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoProduto = TipoProduto::find($id);

        if(isset($tipoProduto))
            return view("TipoProduto/edit")->with("tipoProduto", $tipoProduto);
        #TODO Retornar página de erro.
        return view("messagepage")->with("message", "@Edit: O tipo produto $id não foi encontrado"); 
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
        $tipoProduto = TipoProduto::find($id);

        if(isset($tipoProduto)){
            $tipoProduto->descricao = $request->descricao;
            $tipoProduto->update();
            return $this->index();
        }
        #TODO Retornar página de erro.
        return view("messagepage")->with("message", "@Update: O tipo produto $id não foi encontrado"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProduto = TipoProduto::find($id);
        // Se o produto existir
        if(isset($tipoProduto)){
            $tipoProduto->delete();
            // recarrega o index de produtos
            return $this->index();
        }
        #TODO Retornar página de erro.
        return view("messagepage")->with("message", "@Destroy: O tipo produto $id não foi encontrado"); 
    }
}
