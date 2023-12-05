<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() {

        $trans= Transaksi::all();
        return view('transaksi.transaksi',compact('trans'));
    }

    public function create(){
        // post
        $id = auth()->user()->idkasir;
        $kasir = Kasir::find($id);
        $barang = Barang::all();

        return view('transaksi.tambahtrans', compact('kasir','barang'));
    }
    
  public function store(Request $request)
  {
        $price = Barang::where('idbarang', $request->idbarang)->first();
        $transaksi = new Transaksi();
        $transaksi->idkasir = $request->idkasir;
        $transaksi->idbarang = $request->idbarang;
        $transaksi->gty = $request->gty;
        $transaksi->totalbayar = $price->hargabarang * $request->gty;
        
        $transaksi->tgltransaksi = \Carbon\Carbon::now();

        $transaksi->save();

        $barang = Barang::FindOrFail($request->idbarang);
        $barang->stok -= $request->gty;
        $barang->save();

        return redirect('/transaksi');
  }

//   public function edit($id){
//      $barang = 
//   }

public function destroy($id){
    $crud = Transaksi::where('idtransaksi', $id)
    ->delete();
    session()->flash('success, delete data');
    return redirect('transaksi');
 }

}
