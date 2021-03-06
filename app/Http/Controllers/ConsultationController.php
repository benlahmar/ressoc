<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\User;
use App\Notifications\ConsultationNotif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cs= Consultation::all();
        return view('consultation.index', [
            'cs' => $cs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recupere et valider les param
        $user=auth()->user();
        $u=User::find($user->id);
       $data= $this->validate($request,[

        ]);
        //sauvgarde de l'image
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename); 
        }
          //save in database
          $c=new Consultation();
              
                  $c->titre=$request->titre;
                  $c->descript= $request->descript;
                 
                  $c->datedebut=$request->datedebut;
                  $c->datefin=$request->datefin;
                  $c->photo= $filename;     

              $u->Consultations()->save($c);

              $us=User::all();
              foreach($us as $u)
              {
                $u->notify(new ConsultationNotif());
              }

          return redirect('consultations');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        return view("consultation.show",
        ['ct'=>$consultation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }

    public function test1()
    {
        return "ttttt";
    }
}
