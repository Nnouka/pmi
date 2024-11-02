<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\EnrollRequest;
use App\Models\ToEnroll;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request)
    {
        Mail::to('pmidegree@gmail.com')->send(new Contact(
            $request->name, $request->email, $request->phone, $request->subject, $request->message
        ));
        $request->session()->flash('status', true);
        return \redirect()->back();
    }

    public function enrollRequest(Request $request)
    {
        // save the enrollment
        $data = [];
        foreach($request->input() as $key => $value) {
            $data[$key] = gettype($value) == 'string' ? str_replace("'","",$value) : $value;
        }
        unset($data["_token"]);

        //dd($data);
        $req_to_enroll = new ToEnroll($data);
        $req_to_enroll->save();
        Mail::to('pmidegree@gmail.com')->send(new EnrollRequest($data));
        $request->session()->flash('status', true);
        return \redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
