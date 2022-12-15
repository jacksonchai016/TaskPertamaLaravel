<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $buku = buku::where('no_buku', 'LIKE', "%$keyword%")
                ->orWhere('judul_buku', 'LIKE', "%$keyword%")
                ->orWhere('pengarang_buku', 'LIKE', "%$keyword%")
                ->orWhere('penerbit_buku', 'LIKE', "%$keyword%")
                ->orWhere('tahun_terbit', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $buku = buku::latest()->paginate($perPage);
        }

        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        buku::create($requestData);

        return redirect('admin/buku')->with('flash_message', 'buku added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $buku = buku::findOrFail($id);

        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $buku = buku::findOrFail($id);

        return view('admin.buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $buku = buku::findOrFail($id);
        $buku->update($requestData);

        return redirect('admin/buku')->with('flash_message', 'buku updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        buku::destroy($id);

        return redirect('admin/buku')->with('flash_message', 'buku deleted!');
    }
}
