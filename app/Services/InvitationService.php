<?php

namespace App\Services;

use App\Models\Invitation;

class InvitationService{
    public function saveInvitation(array $data) :Invitation {
        $invitation = Invitation::create($data);
        return $invitation;
    }

    public function getInvitation(int $invitationId):Invitation{
        $invitation= Invitation::find($invitationId);
        return $invitation;
    }
}