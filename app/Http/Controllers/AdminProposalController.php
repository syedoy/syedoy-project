<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class AdminProposalController extends Controller
{
    public function index()
    {
        $proposals = Proposal::with('siswa', 'eskul')->paginate(10);
        return view('admin.proposals.index', compact('proposals'));
    }
}
