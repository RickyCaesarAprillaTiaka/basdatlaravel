<?php

namespace App\Http\Controllers\MartApaAja;

use App\Http\Controllers\Controller;
use App\Models\Member;
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
        $Members = Member::paginate(10);
        return view('Content.Member.Index', ['Members' => $Members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Content.Member.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Member::create([
            'NamaLengkapMember'   => $request->NamaLengkapMember,
            'NoHandphoneMember'   => $request->NoHandphoneMember,
            'AlamatLengkapMember' => $request->AlamatLengkapMember,
            'LevelMember'         => $request->LevelMember
        ]);

        return redirect()->route('member.index')->with('Success', 'Member berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $Member = Member::find($member->id);
        return view('Content.Member.Update', ['Member' => $Member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        Member::find($member->id)->update([
            'NamaLengkapMember'   => $request->NamaLengkapMember,
            'NoHandphoneMember'   => $request->NoHandphoneMember,
            'AlamatLengkapMember' => $request->AlamatLengkapMember,
            'LevelMember'         => $request->LevelMember
        ]);

        return redirect()->route('member.index')->with('Success', 'Member berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $Member = Member::find($member->id);
        $Member->delete();

        return redirect()->route('member.index')->with('Success', 'Member berhasil dihapus');
    }
}
