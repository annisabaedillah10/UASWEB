<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Winningontheissues;
use App\Http\RequestS\Admin\WinningontheissuesRequest;

class WinningontheissuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Winningontheissues::all();
        return view('pages.admin.winningontheissues.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.winningontheissues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WinningontheissuesRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        Winningontheissues::create($data);
        return redirect()->route('winningontheissues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Winningontheissues::findOrFail($id);
        return view('pages.admin.winningontheissues.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WinningontheissuesRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        $item = Winningontheissues::findOrFail($id);
        $item->update($data);

        return redirect()->route('winningontheissues.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Winningontheissues::findOrFail($id);
        $item->delete();
        return redirect()->route('winningontheissues.index');
    }
}
