<?php

namespace App\Http\Controllers;


use App\Models\Consultation;
use App\Models\User;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $consultations = Consultation::all();

        return view('consultation.index', compact('consultations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request,User $user)
    {

        return view('consultation.create', compact('user'));
    }

    /**
     * @param \App\Http\Requests\ConsultationStoreRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

       // dd($request);
        $cons = new Consultation();
        $cons->user_id = $request->user_id;
        $cons->symptomes = $request->symptomes;
        $cons->medicament_prescrits = $request->medicament_prescrits;
        $cons->historique_maladie = $request->historique_maladie;
        $cons->tension_arterielle = $request->tension_arterielle;
        $cons->temperature = $request->temperature;
        $cons->pouls = $request->pouls;
        $cons->frequence_respiratoire = $request->frequence_respiratoire;
        $cons->type_consultations = $request->type_consultations;
        //$cons->created_by = auth()->user()->email;
        $cons->save();
        $user= $request->user_id;

        // $consultations = Consultation::create($request);

        // $request->session()->flash('consultation.id', $consultations->id);

        return redirect()->route('dashboard.user.show', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Consultation $consultation
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, Consultation $consultations)
    {
        return view('consultation.show', compact('consultations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Consultation $consultation
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, Consultation $consultations)
    {
        return view('consultation.edit', compact('consultations'));
    }

    /**
     * @param \App\Http\Requests\ConsultationUpdateRequest $request
     * @param \App\Models\Consultation $consultation
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Consultation $consultations)
    {
        $consultations->update($request->validated());

        $request->session()->flash('consultation.id', $consultations->id);

        return redirect()->route('consultation.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Consultation $consultation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, Consultation $consultation)
    {
        $consultation->delete();

        return redirect()->route('dashboard.consultation.index')->with('status', "Consultation supprimée avec succès");
    }
}
