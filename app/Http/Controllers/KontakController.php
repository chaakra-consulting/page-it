<?php

namespace App\Http\Controllers;

use App\Mail\KontakMail;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'no_telepon' => 'nullable|string|max:50',
                'perusahaan' => 'nullable|string|max:255',
                'perusahaan_jumlah' => 'nullable|string|max:50',
                'subjek' => 'nullable|string|max:255',
                'pertanyaan' => 'nullable|string',
            ]);
    
            Kontak::create($validated);

            $dataMail = [
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telepon' => $request->no_telepon,
                'perusahaan' => $request->perusahaan,
                'perusahaan_jumlah' => $request->perusahaan_jumlah,
                'subjek' => $request->subjek,
                'pertanyaan' => $request->pertanyaan,
            ];

            Mail::to(env('MAIL_TO_ADDRESS'))->send(new KontakMail($dataMail));

            DB::commit();
            return redirect()->back()->with('success', 'Formulir berhasil dikirim.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim formulir: ' . $e->getMessage());
        }
    }
    
}
