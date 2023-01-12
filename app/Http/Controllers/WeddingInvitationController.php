<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingInvitationController extends Controller
{
	public function wedding_invitation($id) {
		return view('wedding_invitation');
	} 
	
	public function wedding_invitation_2($id) {
		return view('wedding_invitation_2');
	}
}
