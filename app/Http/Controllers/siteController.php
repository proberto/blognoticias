<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class siteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia = new Noticia();
        return view('create', compact('noticia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageDB = null;
        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagens');
            $image2 = $destinationPath."/".$name;
            $imaged = Str::after($image2, 'public');
            $imageDB = substr($imaged, 25);
            $image->move($destinationPath, $name);

        }

        Noticia::create([
            'titulo' => $request['titulo'],
            'categoria' => $request['categoria'],
            'chamada' => $request['chamada'],
            'descricao' => $request['descricao'],
            'foto' => $imageDB,

        ]);
        $noticias = Noticia::all();
        return view('index', compact('noticias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::findorfail($id);
        return view('show', compact('noticia'));
    }

    public function pesquisar(Request $request)
    {
        $busca = $request['buscar'];
        $noticias = Noticia::whereRaw('titulo like  ?  or categoria like  ? ', ["%{$busca}%","%{$busca}%"])->get();
        return view('index', compact('noticias'));
    }


}
