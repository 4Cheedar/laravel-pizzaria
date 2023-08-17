<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    /**
     * Run when a new instance is done
     * Roda quando um nova instancia é feita
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Se o usuário está logado
        if(Auth::check())
        {
            $idUser = Auth::user()->id;
            $enderecos = DB::select('select * from Enderecos where Enderecos.Users_id = ?', [$idUser]);
            return view('Endereco/index')->with('enderecos', $enderecos);
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Display a listing of the resource.
     * Monstra um lista dos recursos cadastrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMessage($tipoMensagem, $mensagem)
    {
        // Se o usuário está logado
        if(Auth::check())
        {
            $idUser = Auth::user()->id;
            //$enderecos = DB::select('select * from Enderecos where Enderecos.Users_id = ?', [$idUser]);
            $enderecos = DB::select('select * from Enderecos where Enderecos.Users_id = ?', [$idUser]);
            return view('Endereco/index')->with('enderecos', $enderecos)->with("tipoMensagem", $tipoMensagem)->with("mensagem", $mensagem);
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Se o usuário está logado
        if(Auth::check()){
            return view('Endereco/create');
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Se o usuário estiver logado
        if(Auth::check())
        {
            try {
                $endereco = new Endereco();
                $endereco->Users_id = Auth::user()->id; // Pega o ID do usuário logado
                $endereco->bairro = $request->bairro;
                $endereco->logradouro = $request->logradouro;
                $endereco->numero = $request->numero;
                $endereco->complemento = $request->complemento;
                $endereco->save();
            } catch (\Throwable $th) {
                return $this->indexMessage("danger", $th->getMessage());
            }
            return $this->indexMessage("success", "O endereco foi criado com sucesso.");
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Se o usuário estiver logado
        if(Auth::check())
        {
            // Como o resultado de DB::select é sempre um array comundo do PHP, precisamos utilizado o collect para transformar
            // ele em um array do Laravel para podermos utizar o ->first() e pegar o primeiro elemento.
            $endereco = collect( DB::select( "select * from Enderecos
                                              where Enderecos.id = ? and
                                                    Enderecos.Users_id = ?;", [$id, Auth::user()->id] ) )->first();
            if( isset($endereco) )
            {
                return view("Endereco/show")->with("endereco", $endereco);
            }
            #Retornar página de erro.
            return $this->indexMessage("warning", "O endereco $id não encontrado");
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Se o usuário está logado
        if(Auth::check())
        {
            $endereco = collect( DB::select( "select * from Enderecos
                                                where Enderecos.id = ? and
                                                        Enderecos.Users_id = ?;", [$id, Auth::user()->id] ) )->first();
            if(isset($endereco))
                return view("Endereco/edit")->with("endereco", $endereco);
            #Retornar página de erro.
            return $this->indexMessage("warning", "O endereco $id não encontrado");
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
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
        // Se o usuário estiver logado
        if(Auth::check())
        {
            // $endereco = collect( DB::select( "select * from Enderecos
            //                                   where Enderecos.id = ? and
            //                                         Enderecos.Users_id = ?;", [$id, Auth::user()->id] ) )->first();
            
            $endereco = Endereco::where("id", "=", $id)->where("Users_id", "=", Auth::user()->id)->first();
            //print_r($endereco);

            if(isset($endereco)){
                try {
                    $endereco->Users_id = Auth::user()->id;
                    $endereco->bairro = $request->bairro;
                    $endereco->logradouro = $request->logradouro;
                    $endereco->numero = $request->numero;
                    $endereco->complemento = $request->complemento;
                    $endereco->update();
                } catch (\Throwable $th) {
                    return $this->indexMessage("danger", $th->getMessage());
                }
                return $this->indexMessage("success", "O endereco $id foi editado com sucesso.");
            }
            return $this->indexMessage("warning", "O endereco $id não foi encontrado.");
        }
        return view('messagepage')->with('message', "Você não está com um usuário conectado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::where("id", "=", $id)->where("Users_id", "=", Auth::user()->id)->first();
        // Se o endereço existir
        if(isset($endereco)){
            try {
                $endereco->delete();
            } catch (\Throwable $th) {
                // Retorna um erro quando não consegue excluir
                return $this->indexMessage("danger", $th->getMessage());
            }
            // Retorna um sucesso quando consegue excluir
            return $this->indexMessage("success", "O endereco $id foi removido com sucesso.");
        }
        // Retorna um aviso quando não consegue encontrar
        return $this->indexMessage("warning", "O endereco $id não foi encontrado");
    }
}
