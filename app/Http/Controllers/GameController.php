<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGamePost;
use App\Http\Requests\StoreGamePut;
use App\Models\Game;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $statuses = Status::all();
        $games = Game::searchIdGame($request->id)
            ->searchNameGame($request->name)
            ->searchDescriptionGame($request->description)
            ->searchStatusGame($request->status_id)
            ->paginate(10)
            ->appends(request(['name']));
        return view('mantenedor.game.index', compact('games', 'statuses'));
    }

    public function create()
    {
        $statuses = Status::all();
        return view('mantenedor.game.create', compact('statuses'));
    }

    public function store(StoreGamePost $request)
    {
        $validated = $request->validated();
        if ($request->file('file')) {
            $image = $this->saveImage($request->file('file'));
            $validated['url_image'] = $image;
        }
        Game::create($validated);
        return back()->with("status-ok", 'Juego creado correctamente');
    }

    public function show(Game $game)
    {
        return view('mantenedor.game.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $statuses = Status::all();
        return view('mantenedor.game.edit', compact('game', 'statuses'));
    }

    public function update(StoreGamePut $request, Game $game)
    {
        $validated = $request->validated();
        $this->deleteOldImage($game->url_image);
        if ($request->file('file')) {
            $image = $this->saveImage($request->file('file'));
            $validated['url_image'] = $image;
        }
        $game->update($validated);
        return back()->with("status-ok", 'Juego modificado correctamente');
    }

    public function destroy(Game $game)
    {
        $this->deleteOldImage($game->url_image);
        $game->delete();
        return back()->with("status-ok", 'Juego eliminado correctamente');
    }

    public function saveImage($image)
    {
        $ruta = "/img/games";
        $imagen = Storage::disk('public_dir')->put($ruta, $image);
        return request()->getSchemeAndHttpHost() . '/' . $imagen;
    }

    public function deleteOldImage($oldImage)
    {
        $oldImage = str_replace(request()->getSchemeAndHttpHost(), '', $oldImage);
        $exist = Storage::disk('public_dir')->exists($oldImage);
        if ($exist) {
            Storage::disk('public_dir')->delete($oldImage);
        }
    }
}
