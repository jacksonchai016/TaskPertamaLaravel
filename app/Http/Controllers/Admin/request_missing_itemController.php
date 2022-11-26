<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\request_missing_item;
use Illuminate\Http\Request;

class request_missing_itemController extends Controller
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
            $request_missing_item = request_missing_item::where('missing_item_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('missing_item_status_id', 'LIKE', "%$keyword%")
                ->orWhere('requested_at', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $request_missing_item = request_missing_item::latest()->paginate($perPage);
        }

        return view('admin.request_missing_item.index', compact('request_missing_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.request_missing_item.create');
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
        
        request_missing_item::create($requestData);

        return redirect('admin/request_missing_item')->with('flash_message', 'request_missing_item added!');
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
        $request_missing_item = request_missing_item::findOrFail($id);

        return view('admin.request_missing_item.show', compact('request_missing_item'));
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
        $request_missing_item = request_missing_item::findOrFail($id);

        return view('admin.request_missing_item.edit', compact('request_missing_item'));
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
        
        $request_missing_item = request_missing_item::findOrFail($id);
        $request_missing_item->update($requestData);

        return redirect('admin/request_missing_item')->with('flash_message', 'request_missing_item updated!');
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
        request_missing_item::destroy($id);

        return redirect('admin/request_missing_item')->with('flash_message', 'request_missing_item deleted!');
    }
}
