<?php

namespace App\Http\Controllers;

use App\Models\WeddingInvitations;
use Illuminate\Http\Request;

class WeddingInvitationController extends Controller
{
	public function wedding_invitation($id) {
		$invitation = WeddingInvitations::find($id);
		if(!$invitation){
			return view('welcome');
		}
		$allMessages = $this->get_message();

		return view('wedding_invitation', 
		[
			'allMessages' => $allMessages->toArray(),
			'invitation' => $invitation->toArray()
		]);	}

	public function save_rsvp(Request $request) {
		$invitation = WeddingInvitations::find($request->get('id'));
	
		$invitation->hadir = $request->get('hadir');
		$invitation->jumlah = $request->get('jumlah');
		$invitation->alasan = $request->get('alasan');
		$invitation->pesan = $request->get('pesan');
	
		$invitation->save();
		return redirect('/wedding-invitation/'.$request->get('id'));

	}

	private function get_message(){
		$allMessages = WeddingInvitations::where('pesan', 'exists', true)->get();
		return $allMessages;
	}
}
