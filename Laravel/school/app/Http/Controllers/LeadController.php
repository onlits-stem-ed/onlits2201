<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function get_all_leads()
    {
        $leads = Lead::all();
        return view('leads.leads', ['leads' => $leads]);
    }

    public function store(Request $request)
    {
        $lead = new Lead();
        $lead->first_name = $request->first_name;
        $lead->middle_name = $request->middle_name;
        $lead->last_name = $request->last_name;
        $lead->contact_no = $request->contact_no;
        $lead->email = $request->email;
        $lead->save();
        // ------------ Refactor This (maybe by using middleware) ---------------
        $leads = Lead::all();
        return view('leads.leads', ['leads' => $leads]);
    }

    public function get_lead($id)
    {
        $lead = Lead::find($id);
        return view('leads.update', ['lead' => $lead]);
    }

    public function update(Request $request)
    {
        $lead = Lead::find($request->id);
        $lead->first_name = $request->first_name;
        $lead->middle_name = $request->middle_name;
        $lead->last_name = $request->last_name;
        $lead->contact_no = $request->contact_no;
        $lead->email = $request->email;
        $lead->save();
        // ------------ Refactor This (maybe by using middleware) -------------
        $leads = Lead::all();
        return view('leads.leads', ['leads' => $leads]);
    }

    public function delete($id)
    {
        Lead::destroy($id);
        // ------------ Refactor This (maybe by using middleware) -------------
        $leads = Lead::all();
        return view('leads.leads', ['leads' => $leads]);
    }
}
