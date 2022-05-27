<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Contribution;
use App\Repositories\IContributionRepository ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ContributionController extends Controller
{
    public IContributionRepository $repo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(IContributionRepository $r)
    {
        $this->repo=$r;
    }
    public function index()
    {
        $cc=new Contribution();
        $cc->titre='ppp';
        $cc->contenu='contenu...';
        $this->repo->save($cc);
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
    public function store(Request $request)
    {
       /* Schema::create([
            'titre'=>'hhh',
            'contenu'=>'contenu '
        ]);
        */
        $cc=new Contribution();
        $cc->titre='ppp';
        $cc->contenu='contenu...';
        $c=Consultation::find(1) ;
        $c->contributions()->save($cc);
        //$cc->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function show(Contribution $contribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Contribution $contribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribution $contribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribution $contribution)
    {
        //
    }
}
