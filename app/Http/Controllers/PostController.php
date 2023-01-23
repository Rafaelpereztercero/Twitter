<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\StoreRequest;
use App\Http\Requests;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (view('form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $this->authorize('upadate-post');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $com = true;
        $cad = False;

       if(request('Caducable') == null) {
      $cad = false;
       }
       if(request('Comentable') == null) {
            $com = false;
       }
        $validated = $request->validated();

        
        $post = new Post();
        
        
        $post->user_id = Auth::user()->id;
        $post->acceso = request('Acceso');
        $post->caducable = $cad;
        $post->comentable = $com;
        $post->title = request('Titulo');
        $post->extract = request('Extracto');
        $post->content = request('Contenido');

        $post->save();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
