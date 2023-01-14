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
		
		$invitation->nama = $request->get('nama');
		$invitation->dari = $request->get('dari');
		$invitation->hadir = $request->get('hadir');
		$invitation->jumlah = $request->get('jumlah');
		$invitation->alasan = $request->get('alasan');
		$invitation->pesan = $request->get('pesan');
	
		$invitation->save();
		return redirect('/wedding-invitation/'.$invitation->nama);
	}

	private function get_message(){
		$allMessages = WeddingInvitations::where('pesan', 'exists', true)->get();
		return $allMessages;
	}
}
