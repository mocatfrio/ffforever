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
			'name' => str_replace("-"," ",$name)
		]);	
	}

	public function save_rsvp(Request $request) {

		$invitation = new WeddingInvitations();
		
		$invitation->nama = $request->get('name');
		$invitation->rsvp_join = $request->get('rsvp_join');
		$invitation->rsvp_count = $request->get('rsvp_count');
		$invitation->rsvp_reason = $request->get('rsvp_reason');
		$invitation->timestamp = time();
	
		$result = $invitation->save();

		$response['status'] = $result ? "Success" : "Error";
		return json_encode($response);
	}

	public function save_message(Request $request) {

		$invitation = new WeddingInvitations();
		
		$invitation->nama = $request->get('name');
		$invitation->message_name = $request->get('message_name');
		$invitation->message_from = $request->get('message_from');
		$invitation->message_data = $request->get('message_data');
		$invitation->timestamp = time();
	
		$result = $invitation->save();

		$invitation->timestamp = date("d M Y, H:i",$invitation->timestamp);
		$response['status'] = $result ? "Success" : "Error";
		$response['data'] = $invitation;
		return json_encode($response);
	}

	private function get_message(){
		$filter['message_data']['$ne'] = null;
		$filter['message_name']['$ne'] = null;
		$allMessages = WeddingInvitations::where($filter)->orderBy('timestamp', 'desc')->get();
		return $allMessages;
	}
}
