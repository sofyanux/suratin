<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\LetterLog;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan indeks surat
        $letterList = Letter::all();
        return view('letter.index', compact('letter$letterList'));
    }

    public function create()
    {
        // Logika untuk menampilkan formulir tambah surat
        return view('letter.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            // ... (Tambahkan validasi sesuai kebutuhan)
        ]);

        // Simpan surat baru
        $letter = Letter::create($validatedData);

        // Tambahkan log aktivitas
        LetterLog::create([
            'user_id' => auth()->user()->id,
            'activity' => 'Menambah surat baru dengan judul: ' . $letter->title,
        ]);

        return redirect()->route('letter.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail surat
        $letter = Letter::findOrFail($id);
        return view('letter.show', compact('letter'));
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir edit surat
        $letter = Letter::findOrFail($id);
        return view('letter.edit', compact('letter'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            // ... (Tambahkan validasi sesuai kebutuhan)
        ]);

        // Perbarui surat
        $letter = Letter::findOrFail($id);
        $letter->update($validatedData);

        // Tambahkan log aktivitas
        LetterLog::create([
            'user_id' => auth()->user()->id,
            'activity' => 'Mengubah surat dengan judul: ' . $letter->title,
        ]);

        return redirect()->route('letter.index')->with('success', 'Surat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus surat
        $letter = Letter::findOrFail($id);
        $letter->delete();

        // Tambahkan log aktivitas
        LetterLog::create([
            'user_id' => auth()->user()->id,
            'activity' => 'Menghapus surat dengan judul: ' . $letter->title,
        ]);

        return redirect()->route('letter.index')->with('success', 'Surat berhasil dihapus.');
    }
}
