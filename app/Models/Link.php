<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $fillable = ['url', 'name', 'order'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moveTo(string $order)
    {
        $links = Link::where('user_id', $this->user_id)->orderBy('order', 'asc')->get();
        $ordersPositions = $links->pluck('order')->toArray();
        $index = array_search($this->order, $ordersPositions);
        $olderLink = Link::where('order', $order === 'up' ? $ordersPositions[$index - 1] : $ordersPositions[$index + 1])->first();
        $moveTo = $olderLink->order;
        if ($olderLink) {
            $olderLink->order = $this->order;
            $olderLink->save();
            $this->order = $moveTo;
            $this->save();
        }
    }
}
