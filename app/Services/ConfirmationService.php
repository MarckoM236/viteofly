<?php

namespace App\Services;

use App\Models\Confirmation;
use Illuminate\Database\Eloquent\Collection;

class ConfirmationService{
    public function saveConfirmation(array $data) :Confirmation {
        $confirmation = Confirmation::create($data);
        return $confirmation;
    }


}