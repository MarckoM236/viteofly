<?php

namespace App\Http\Controllers\Invitations;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvitationCreate;
use App\Services\InvitationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index(InvitationService $invitation){
        $invitations = $invitation->getAllinvitations();
        return view('core.invitations.index', compact('invitations'));
    }
    public function create(){
        return view('core.invitations.create');
    }

    public function store(InvitationCreate $request, InvitationService $invitation){
    
    $data = $request->validated();

        try {
            $invitation_data = [
                "user_id"=> Auth::user()->id,
                "template_id"=>$data['template_id'],
                "title"=> $data['title'],
                "slug"=>$data['slug'],
                "data"=> json_encode([
                    "event"=>$data['event'],
                    "dateEvent"=>$data['date_event'],
                    "addressEvent"=>$data['address_event'],
                    "placeEvent"=>$data['place_event'],
                    "ubicationEvent"=>$data['ubication_event'],
                    "celebrant"=>$data['celebrant'],
                    "messageHero"=>$data['message_hero'],
                    "messageFooter"=>$data['message_footer']

                ]),
            ];

            $invitation->saveInvitation($invitation_data);

            return redirect()
            ->route('invitation.index')
            ->with('success', 'Invitación creada.');
        } catch (\Throwable $th) {
            return back()
            ->withInput()
            ->with('error', 'No fue posible crear la invitación. '.$th);
        }
        
    }
    
    public function show(int $invitationId, InvitationService $invitation)
    {
        $invitation = $invitation->getDetailInvitation($invitationId);
        $arr_invitation = $invitation->map(function ($item, $key) {
            $data = json_decode($item['data'], true);
            return [
                'id'=> $item['id'],
                'name' => $data['celebrant'],
                'event'=> $data['event'],
                'date_event'=> $data['dateEvent'],
                'place_event'=> $data['placeEvent'],
                'address_event'=> $data['addressEvent'],
                'ubication_event'=> $data['ubicationEvent'],
                'message_hero'=> $data['messageHero'],
                'message_footer'=>$data['messageFooter'],
                'folder' => $item['folder'],
                'theme' => $item['slug']
            ];
        });
        

        return view('core.invitations.show', compact('arr_invitation'));
    }
}