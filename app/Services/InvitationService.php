<?php

namespace App\Services;

use App\Models\Invitation;
use Illuminate\Database\Eloquent\Collection;

class InvitationService{
    public function saveInvitation(array $data) :Invitation {
        $invitation = Invitation::create($data);
        return $invitation;
    }

    public function getDetailInvitation(int $invitationId):Collection{
        $invitation= Invitation::leftJoin('templates as tmp','invitations.template_id','=','tmp.id')
        ->where('invitations.id',$invitationId)
        ->where('invitations.status','published')
        ->where('tmp.is_active',1)
        ->select('tmp.folder','tmp.slug','invitations.data', 'invitations.id', 'invitations.title', 'invitations.description')
        ->get();
        return $invitation;
    }

    public function getAllinvitations() : Collection{
        $invitations = Invitation::all();
        return $invitations;
    }

}