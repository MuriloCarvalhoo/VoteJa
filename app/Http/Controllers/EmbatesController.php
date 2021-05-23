<?php

namespace App\Http\Controllers;

use App\CategoriaModel;
use App\Embates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class EmbatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $embates = Embates::join('categorias', 'embates.id_categoria', '=', 'categorias.id_categoria')
        ->select('embates.*', 'categorias.nome_categoria')
        ->get();

        return view('embates.index', compact('embates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaModel::pluck('nome_categoria','id_categoria');

        return view('embates.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id_categoria' => 'required',
            'candidato_1' => 'required|unique:embates,candidato_1',
            'candidato_2' => 'required|unique:embates,candidato_2',
            'foto_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required',


        ];

        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('embates.index')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->except('foto_1', 'foto_2');
            try{
                $embate = new Embates;
                        $embate->id_categoria = $data['id_categoria'];
                        $embate->candidato_1 = $data['candidato_1'];
                        $embate->candidato_2 = $data['candidato_2'];
                        $embate->nome_embate = $data['candidato_1'].' X '.$data['candidato_2'];
                        $embate->voto_1 = 0;
                        $embate->voto_2 = 0;

                        if($foto_1 = $request->file('foto_1')){
                            $fotoName1=$foto_1->getClientOriginalName();
                            $foto_1->move('public/images', $fotoName1);
                           $embate->foto_1 = $data['foto_1']=$fotoName1;
                        }
                        if($foto_2 = $request->file('foto_2')){
                            $fotoName2=$foto_2->getClientOriginalName();
                            $foto_2->move('public/images', $fotoName2);
                            $embate->foto_2 = $data['foto_2']=$fotoName2;
                        }

                        $embate->save($data);

                        return redirect()->route('embates.index');
                }catch(Exception $e){
                    return redirect('embates.index')->with('failed',"operation failed");
                }
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Embates  $embates
     * @return \Illuminate\Http\Response
     */
    public function show(Embates $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Embates  $embates
     * @return \Illuminate\Http\Response
     */
    public function edit(Embates $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Embates  $embates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Embates $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Embates  $embates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Embates $id)
    {

    }

}
