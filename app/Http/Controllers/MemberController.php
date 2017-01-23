<?php

namespace App\Http\Controllers;

use App\Member;
use App\Position;
use Illuminate\Http\Request;

class MemberController extends Controller
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
        $members=Member::all();
        $positions=Position::all();
        $pos=array();
        foreach ($positions as $position){
            $pos[$position->id]=$position->title;
        }
        return view('controlPanel.members.create')->with('members',$members)->with('positions',$pos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'address1'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'state'=>'required',
            'phone'=>'required',
        ]);
        $member=new Member();
        $member->firstname=$request->firstname;
        $member->lastname=$request->lastname;
        $member->email=$request->email;
        $member->address1=$request->address1;
        $member->address2=$request->address2;
        $member->city=$request->city;
        $member->zip=$request->zip;
        $member->state=$request->state;
        $member->phone=$request->phone;

        $member->save();

        if(isset($request->positions)){
            $member->positions()->sync($request->positions,false);
        }else{
            $member->positions()->sync(array(),false);
        }
        $request->session()->flash('success','Address created successfully');
        return redirect()->back();
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
        $member=Member::find($id);
        $positions=Position::all();
        $pos=array();
        foreach ($positions as $position){
            $pos[$position->id]=$position->title;
        }
        return view('controlPanel.members.edit')->with('member',$member)->with('positions',$pos);

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
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'address1'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'state'=>'required',
            'phone'=>'required',
        ]);
        $member=Member::find($id);
        $member->firstname=$request->firstname;
        $member->lastname=$request->lastname;
        $member->email=$request->email;
        $member->address1=$request->address1;
        $member->address2=$request->address2;
        $member->city=$request->city;
        $member->zip=$request->zip;
        $member->state=$request->state;
        $member->phone=$request->phone;

        $member->save();

        if(isset($request->positions)){
            $member->positions()->sync($request->positions,true);
        }else{
            $member->positions()->sync(array(),true);
        }
        $request->session()->flash('success','Address Updated successfully');
        return redirect()->back();
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
