<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::orderBy('created_at', 'desc')->get();
        
        return view('post.index', array('posts' => $allPosts, 'users' => User::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->privilege == 1){
            return view('post.create');
        }else{
            return redirect('/home');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->privilege == 1){
            if($request->conteudo == null){
                $request->conteudo = " ";
            }
    
            $post = new Post();
            $post->titulo = $request->titulo;
            $post->conteudo = $request->conteudo;
            $post->users_id = Auth::id();
            $post->category = $request->category;
    
            if($post->save()){
                if($request->hasFile('foto')){
                    $foto = $request->file('foto');
                    $nomearquivo = md5($post->id);
                    $request->file('foto')->move(public_path('images/fotos_posts/'), $nomearquivo);
                }
                return redirect('ncnews');
            }
        }else{
            return redirect('/home');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    public function showCategory($category){
        $post = Post::where('category', 'LIKE', $category)->get();
        return view('post.show', array('posts' => $post, 'users' => User::all()));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(Auth::user()->privilege == 1){
            return view('post.edit', array('post' => $post));
        }else{
            return redirect('/home');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->privilege == 1){
            $post = Post::find($id);
            $post->titulo = $request->titulo;
            $post->conteudo = $request->conteudo;
            $post->users_id = Auth::id();
            $post->category = $request->category;
    
            if($request->hasFile('foto')){
                $foto = $request->file('foto');
                $nomearquivo = md5($post->id);
                $request->file('foto')->move(public_path('images/fotos_posts/'), $nomearquivo);
            }
    
            if($post->save()){
                return redirect('ncnews');
            }else{
                dd('Ocorreu um erro durante a atualizacao do seu post!');
            }
        }else{
            return redirect('/home');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(Auth::user()->privilege == 1){
            $post->delete();
            return redirect('ncnews')->with('success_message', 'teste');
        }else{
            return redirect('/home');
        }
        
    }
}
