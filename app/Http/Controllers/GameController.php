<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGamePost;
use App\Http\Requests\StoreGamePut;
use App\Models\Game;
use App\Models\Status;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('mantenedor.game.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGamePost $request)
    {
        Game::create($request->validated());
        return back()->with("status-ok", 'Juego creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('mantenedor.game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $statuses = Status::all();
        return view('mantenedor.game.edit', compact('game', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGamePut $request, Game $game)
    {
        $game->update($request->validated());
        return back()->with("status-ok", 'Juego modificado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return back()->with("status-ok", 'Juego eliminado correctamente');
    }
}
