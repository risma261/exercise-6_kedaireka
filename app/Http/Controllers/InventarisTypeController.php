<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use App\Models\Inventaris_type;
use App\Http\Requests\StoreInventaris_typeRequest;
use App\Http\Requests\UpdateInventaris_typeRequest;

class InventarisTypeController extends Controller
{
    public function index()
    {
        $inventaristypes = Inventaris_type::paginate(4);
        return view('inventaristype.index', compact('inventaristypes'));
    }

    public function create()
    {
        $inventaristypes = Inventaris_type::get();
        return view('inventaristype.create', compact('inventaristypes'));
    }

    public function store(Request $request)
    {
        $inventaris_types = Inventaris_type::create([
            "jenis_barang" => $request->jenis_barang,
            "deskripsi_barang" => $request->deskripsi_barang,
        ]);

        return redirect('/inventaristype');
    }

    public function edit($inventaristype)
    {
        $inventaristype = Inventaris_type::findorfail($inventaristype);

        return view('inventaristype.edit', compact('inventaristype'));
    }

    public function update(Request $request, $inventaris_types)
    {
        $inventaris_types = Inventaris_type::findorfail($inventaris_types);
        $inventaris_types -> update([
            "jenis_barang" => $request ->jenis_barang,
            "deskripsi_barang" => $request->deskripsi_barang,
        ]);
        return redirect("/inventaristype");
    }

    public function destroy($inventaristype)
    {
            $inventaristype = Inventaris_type::findorfail($inventaristype);
            $inventaristype->delete();

            return redirect('/inventaristype');
    }
}
