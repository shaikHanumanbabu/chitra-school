<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'entry_fee',
    ];

    function getTitle()
    {
        $parts = explode('-', $this->title, 2); // limit to 2 parts to avoid accidental extra splits

        $title = trim($parts[0]);
        $subtitle = isset($parts[1]) ? trim($parts[1]) : '';

        $formatted = $title;

        if ($subtitle) {
            $formatted .= ' <span>– ' . $subtitle . '</span>';
        }

        return $formatted;
    }
}
