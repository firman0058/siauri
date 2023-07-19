<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function storeOrUpdate(Request $request)
    {
        $suhu = trim($request->suhu);
        $udara  = trim($request->udara);
        $tanah  = trim($request->tanah);

        $existingData = DB::table('sensor')
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$existingData) {
            // Jika tidak ada data, simpan data baru
            DB::table('sensor')->insert([
                'suhu' => $suhu,
                'udara' => $udara,
                'tanah' => $tanah,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            // Jika ada data, periksa waktu pembuatan terakhir
            $lastCreated = strtotime($existingData->created_at);
            $now = strtotime(now());
            $diffInSeconds = $now - $lastCreated;

            if ($diffInSeconds < 3600) {
                // Jika data masih kurang dari 1 jam, lakukan update fieldnya saja
                DB::table('sensor')
                    ->where('id', $existingData->id)
                    ->update([
                        'suhu' => $suhu,
                        'udara' => $udara,
                        'tanah' => $tanah,
                        'updated_at' => now(),
                    ]);
            } else {
                // Jika data sudah lebih dari 1 jam, simpan data baru
                DB::table('sensor')->insert([
                    'suhu' => $suhu,
                    'udara' => $udara,
                    'tanah' => $tanah,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return response()->json(['success' => true]);
    }
}
