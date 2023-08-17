<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class PedidoUsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index(Request $request){
        return view("PedidoUsuario/index");
    }

    public function confirmarPedido(Request $request){
        return view("PedidoUsuario/confirmar-pedido");
    }

    public function getProdutos($id)
    {
        // Se o $id buscado for menor que 1 então ele é inválido
        if($id < 1) 
            $produtos = DB::select("select Produtos.*, Tipo_Produtos.descricao from Produtos join Tipo_Produtos on Produtos.Tipo_Produtos_id = Tipo_Produtos.id");
        else
        $produtos = DB::select("select Produtos.*, Tipo_Produtos.descricao from Produtos join Tipo_Produtos on Produtos.Tipo_Produtos_id = Tipo_Produtos.id where Produtos.Tipo_Produtos.id = ?", [$id]);
        
        $response["success"] = true;
        $response["message"] = "Consulta de tipo realizada com sucesso";
        $response["return"] = $produtos;
        // Retornar resposta e código de resposta no formato JSON
        return response()->json($response, 201);
    }
}
