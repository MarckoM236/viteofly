<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;

class InvitationController extends Controller
{
    public function show($invitationId)
    {
        $invitation = [
            'id' => $invitationId,
            'name' => 'John Doe',
            'event' => 'Birthday Party',
            'date' => '2024-07-15',
            'location' => '123 Party Lane, Fun City',
            'theme' => 'plimplim',
        ];

        return view('core.invitations.show', compact('invitation'));
    }
}