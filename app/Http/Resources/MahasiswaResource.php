<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'       => $this->id,
            'nama'     => $this->nama,
            'nim'      => $this->nim,
            'prodi'    => $this->prodi,
            'angkatan' => $this->angkatan,
            'ipk'      => (float) $this->ipk,
            'email'    => $this->email,
            'bio'      => $this->bio,
            // Sengaja TIDAK menyertakan: user_id, password, dll.
        ];
    }
}