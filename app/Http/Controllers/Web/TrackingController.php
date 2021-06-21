<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class TrackingController extends Controller
{
	public function index()
	{
		return Inertia::render('Tracking/Index', [
			'data' => []
		]);
	}
}
