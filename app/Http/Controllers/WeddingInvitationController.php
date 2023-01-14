<?php

namespace App\Http\Controllers;

use App\Models\WeddingInvitations;
use Illuminate\Http\Request;

class WeddingInvitationController extends Controller
{
	public function wedding_invitation($name) {

		$allMessages = $this->get_message();
		return view('wedding_invitation', 
		[
			'allMessages' => $allMessages->toArray(),
			'name' => $name
		]);	}

	public function save_rsvp(Request $request) {

		$invitation = new WeddingInvitations();
		
		$invitation->nama = $request->get('name');
		$invitation->message_name = $request->get('message_name');
		$invitation->message_from = $request->get('message_from');
		$invitation->message_data = $request->get('message_data');
		$invitation->rsvp_join = $request->get('rsvp_join');
		$invitation->rsvp_count = $request->get('rsvp_count');
		$invitation->rsvp_reason = $request->get('rsvp_reason');
		$invitation->timestamp = time();
	
		$invitation->save();
		return redirect('/wedding-invitation/'.$invitation->nama);
	}

	private function get_message(){
		$allMessages = WeddingInvitations::where('message_data', 'exists', true)->orderBy('timestamp', 'desc')->get();
		return $allMessages;
	}
}
