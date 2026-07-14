<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Services\InvitationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index(){
        return view('core.invitations.index');
    }
    public function create(){
        return view('core.invitations.create');
    }

    public function store(Request $request, InvitationService $invitation){
        try {
            $invitation_data = [
                "user_id"=>Auth::user()->id,
                "template_id"=>1,
                "title"=> $request->title,
                "slug"=>'cumple',
                "data"=> json_encode([
                    "event"=>$request->event,
                    "dateEvent"=>$request->date_event,
                    "addressEvent"=>$request->address_event,
                    "placeEvent"=>$request->place_event,
                    "ubicationEvent"=>$request->ubication_event,
                    "celebrant"=>$request->celebrant,
                    "messageHero"=>$request->message_hero,
                    "messageFooter"=>$request->message_footer

                ]),
            ];

            $invitation->saveInvitation($invitation_data);

            return redirect()
            ->route('invitation.index')
            ->with('success', 'Invitación creada.');
        } catch (\Throwable $th) {
            dd($th);
            return back()
            ->withInput()
            ->with('error', 'No fue posible crear la invitación.');
        }
        
    }
    
    public function show(int $invitationId, InvitationService $invitation)
    {
        $invitation = $invitation->getInvitation($invitationId);
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