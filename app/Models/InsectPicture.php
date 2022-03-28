<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class InsectPicture extends Model
{
    protected $fillable = [
        'picture_storage_url',
        'insect_id',
        'is_thumbnail'
    ];

    /*
     * Relations
     */

    public function insect(): BelongsTo
    {
        return $this->belongsTo(Insect::class);
    }

    /*
     * Helper methods
     */

    /**
     * Get image extracted from the storage
     * @return StreamedResponse|null Streamed image
     */
    public function getImage(): ?StreamedResponse
    {
        if (str_starts_with($this->picture_storage_url, 'http')) return $this->picture_storage_url;
        return Storage::response($this->picture_storage_url);
    }

    /**
     * Import image into storage and generate storage path
     * @param $image - Actual image
     * @return string Storage url
     */
    public function setImage($image): string
    {
        $path = $image->store('insects');
        $this->update([
            'picture_storage_url' => $path
        ]);

        return $path;
    }
}
