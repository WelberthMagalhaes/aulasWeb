<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidade::orderBy('nome')->get();
        return view ('cidades.index', [ 'cidades' => $cidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('nome')->get();
        return view('cidades.create', ['estados' => $estados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request); //faz o dump(printf da variavel e encerra

        //Validação

        //Gravar
        //Opção1
        // $c = new Cidade;
        // $c->nome = $request->nome;
        // $c->estado_id = $request->estado_id;
        // $c->save();

        //Opção2
        Cidade::create($request->all());//nome das tags de entrada com mesmo nome do BD

        //return redirect('/cidades');
        return redirect()->route('cidades.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    { //public function show($id){ $cidade = Cidade::find($id); }
        //dd($cidade);
        return view('cidades.show', ['cidade' => $cidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
      $estados = Estado::orderBy('nome')->get();
      return view('cidades.edit', ['estados' => $estados, 'cidade' => $cidade]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)//$cidade recebe o id passado pelo edit.blade no campo action do form
    {
          //Validação

          //Gravar 01

          //Gravar 02
          $cidade->fill($request->all());// Atualiza os campos do objeto
          $cidade->save(); // Persiste no banco de dados

          session()->flash('mensagem', 'Cidade atualizada com sucesso!');

          return redirect()->route('cidades.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        // Verificar se o registro pode ser excluído

        $cidade->delete();

        return redirect()->route('cidades.index');
    }
}
