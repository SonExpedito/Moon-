<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Filmes;

class FilmesController extends Controller
{

    public function dashboard()
    {
        $filmes = Filmes::all();  // Use 'all()' com a letra minúscula
        return view('dashboard')->with("filmes", $filmes);
    }
    public function favoritar($id)
    {
        $filme = Filmes::findOrFail($id); // Encontra o filme com o ID fornecido
        $filme->update(['favorito' => 1]); // Atualiza o campo 'favorito' para 1

        return redirect()->back();
    }

    public function desfavoritar($id)
    {
        $filme = Filmes::findOrFail($id); // Encontra o filme com o ID fornecido
        $filme->update(['favorito' => 0]); // Atualiza o campo 'favorito' para 0

        return redirect()->back();
    }

    public function cadastrar()
    {
        return view('cadastrar');
    }


    public function listartabela()
    {
        $filmes = Filmes::All();
        return view('listar')->with("filmes", $filmes);
    }

    public function adicionar(Request $req)
    {
        $filme = new Filmes();
        $filme->titulo = $req->titulo;
        $filme->image = $req->image;
        $filme->descricao = $req->descricao;
        $filme->video = $req->video;

        if ($req->hasFile('image') && $req->file('image')->isValid()) {

            $requestImage = $req->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/filmes'), $imageName);

            $filme->image = $imageName;
        }



        $filme->save();
        return redirect('/dashboard');
    }

    public function editar($id)
    {
        $filme = Filmes::find($id);
        return view('editar')->with("filmes", $filme);
    }

    public function atualizar(Request $req, $id)
    {
        $filme = Filmes::find($id);

        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $requestImage = $req->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/filmes'), $imageName);

            if ($filme->image) {
                $oldImagePath = public_path('img/filmes') . '/' . $filme->image;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $filme->image = $imageName;
        }

        $filme->update([
            'titulo' => $req->titulo,
            'descricao' => $req->descricao,
            'video' => $req->video
        ]);

        return redirect('/dashboard');
    }

    public function excluir($id)
    {
        $filme = Filmes::find($id);

        if ($filme->image) {
            $imagePath = public_path('img/filmes') . '/' . $filme->image;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $filme->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $filme = Filmes::find($id);

        return view('filme.show', ['filme' => $filme]);
    }
}
