<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function index(Support $support)
{
    $supports = $support->all();
    //dd($supports);

    return view('admin.supports.index',compact('supports'));

}

    public function create()
    {
        return view('admin.supports.create');

}

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');

}

    public function show(string $id)
    {
//         Support::find($id);
//         Support::where('id', $id)->first();
//         Support::where('id', '!=', $id)->first();


        if (!$support = Support::find($id)){
            return back();
        }

        return view('admin.supports.show', compact('support'));
}


    public function edit(string $id)
    {
        if (!$support = Support::find($id)){
            return back();
        }

        return view('admin.supports.edit', compact('support'));

}


    public function update(StoreUpdateSupport $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)){
            return back();
        }

        $support->update($request->only([
            'subject',
            'body'
        ]));

        return redirect()->route('supports.index');

}

    public function destroy($id)
    {
        if (!$support = Support::find($id)){
            return back();
        }

        $support->delete();

        return  redirect()->route('supports.index');

}



}
