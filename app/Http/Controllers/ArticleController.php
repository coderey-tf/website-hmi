<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_id'] = Auth::id();
        $data['views'] = 0;

        if ($image = $request->file('gambar_artikel')) {
            // $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $data['gambar_artikel'] = $imageName;
        }

        Article::create($data);

        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('/admin/articles');
        // return redirect()->route('admin.article.index')->with('message', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article.edit', compact('categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nama_kategori' => 'required|min:4',
        // ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_id'] = Auth::id();
        $data['views'] = 0;

        if ($image = $request->file('gambar_artikel')) {
            // $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $data['gambar_artikel'] = $imageName;
        } else {
            unset($data['gambar_artikel']);
        }

        $article = Article::findorFail($id);
        $article->update($data);

        Alert::success('Berhasil', 'Data Berhasil Diedit');
        return redirect('/admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('/admin/articles');
    }
}
