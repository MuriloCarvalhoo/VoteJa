<?php

namespace App\Http\Controllers;

use App\Home;
use App\Embates;
use App\Votos;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar Categorias aonde existe algum embate criado
        $embates = Embates::join('categorias', 'embates.id_categoria', '=', 'categorias.id_categoria')
        ->select('embates.*', 'categorias.nome_categoria')
        ->orderBy('id_categoria','asc')
        ->get();


        return view('index' , compact('embates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Dados do Formulario
        $token =$request->_token;
        $id = $request->id;
        $candidato =$request->candidato;

        //Verificar se já votou
        if(Votos::where('id_embate','=', $id)
            ->where('nome_candidato','=', $candidato)
            ->where('token','=', $token)->exists()
        ){

            return redirect()->back();

        };

        //Criar voto na tabela Voto
        $votos = new Votos;
        $votos->id_embate = $id;
        $votos->nome_candidato = $candidato;
        $votos->token = $token;
        $votos->voto = $votos->voto + 1;
        $votos->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }

}