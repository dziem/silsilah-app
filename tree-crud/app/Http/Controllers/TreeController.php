<?php

namespace App\Http\Controllers;

use App\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tree = Tree::join('silsilah','silsilah.id_silsilah','=','silsilah.id_orang_tua')paginate(5);
        $tree = DB::table('silsilah as s')
			->select('ss.id_silsilah as id_silsilah', 'ss.nama as nama', 'ss.jenis_kel as jenis_kel', 's.nama as orang_tua')
			->rightJoin('silsilah as ss', 's.id_silsilah', '=', 'ss.id_orang_tua')
			->paginate(5);
		return view('tree.index',compact('tree'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	
	public function silsilah(){
		$tree = Tree::all()->toArray();
		return view('tree.silsilah')->with('tree', $tree);
	}
	
    public function create()
    {
		$tree = Tree::all();
        return view('tree.create')->with('tree', $tree);
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
            'nama' => 'required',
            'jenis_kel' => 'required',
        ]);
		Tree::create($request->all());
        return redirect()->route('tree.index')
            ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        return view('tree.show',compact('tree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree $tree)
    {
		$data = [
			'trees' => Tree::all(),
			'tree' => $tree
		];
        return view('tree.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree)
    {
		$request->validate([
            'nama' => 'required',
            'jenis_kel' => 'required',
        ]);
        $tree->update($request->all());
        return redirect()->route('tree.index')
            ->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();
		return redirect()->route('tree.index')
            ->with('success','Data berhasil dihapus');
    }
}
