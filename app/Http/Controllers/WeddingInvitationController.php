<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingInvitationController extends Controller
{
	public function wedding_invitation($id) {
		return view('wedding_invitation');
	}
}
