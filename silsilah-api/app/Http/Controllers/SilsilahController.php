<?php

namespace App\Http\Controllers;

use App\Silsilah;
use Illuminate\Http\Request;

class SilsilahController extends Controller
{

    public function showAllSilsilah()
    {
        return response()->json(Silsilah::all());
    }
	
	public function showAllGrandKids($id, $jk = NULL){
		if ($jk) {
			return response()->json(Silsilah::where('jenis_kel', $jk)->whereIn('id_orang_tua', Silsilah::find($id))->get());
		} else {
			return response()->json(Silsilah::whereIn('id_orang_tua', Silsilah::find($id))->get());
		}
	}

    public function showOneSilsilah($id)
    {
        return response()->json(Silsilah::find($id));
    }

    public function create(Request $request)
    {
        $silsilah = Silsilah::create($request->all());

        return response()->json($silsilah, 201);
    }

    public function update($id, Request $request)
    {
        $silsilah = Silsilah::findOrFail($id);
        $silsilah->update($request->all());

        return response()->json($silsilah, 200);
    }

    public function delete($id)
    {
        Silsilah::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}