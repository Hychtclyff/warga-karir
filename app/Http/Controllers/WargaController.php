<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|digits:16|unique:wargas,nik',
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        Warga::create($request->all());

        return redirect()->route('home')->with('success', 'Data warga berhasil ditambahkan.');
    }

    /**
     * Tampilkan form untuk mengedit data warga.
     */


    /**
     * Perbarui data warga yang ada.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|numeric|digits:16|unique:wargas,nik,' . $id,
            'nama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $warga = Warga::findOrFail($id);
        $warga->update($request->all());

        return redirect()->route('home')->with('success', 'Data warga berhasil diperbarui.');
    }

    /**
     * Hapus data warga.
     */
    public function destroy($id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();

        return redirect()->route('home')->with('success', 'Data warga berhasil dihapus.');
    }
    public function search(Request $request)
    {
        // Ambil input pencarian
        $query = $request->input('search');

        // Lakukan pencarian data di model (misalnya model 'addresses' sebagai contoh)
        // Sesuaikan model sesuai dengan kebutuhan data yang ingin dicari
        $results = Warga::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('nik', 'LIKE', "%{$query}%")
            ->orWhere('pekerjaan', 'LIKE', "%{$query}%")
            ->get();

        // Cek apakah ada hasil pencarian
        if ($results->count() > 0) {
            return view('home', ['data' => $results]);
        }

        // Kembalikan jika tidak ada hasil dengan pesan error
        return back()->with('error', 'No results found. Please try a different keyword.');
    }
}
