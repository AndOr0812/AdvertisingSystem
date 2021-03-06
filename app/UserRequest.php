<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model {
    protected $fillable;

    public function sender() {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function receiver() {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
