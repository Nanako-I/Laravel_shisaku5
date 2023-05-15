<?php

namespace App\Http\Controllers;

use App\Models\Speech;
use App\Models\Person;
use Illuminate\Http\Request;

class SpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $speech = Speech::all();
        // ('people')に$peopleが代入される
        
        // 'people'はpeople.blade.phpの省略↓　// compact('people')で合っている↓
        return view('people',compact('speech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
{
    $person = Speech::findOrFail($request->people_id);
    return redirect()->route('speech.edit', ['people_id' => $person->id]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            // 'temperature' => 'required|max:255',
            // 'people_id' => 'required|exists:people,id',
        ]);
        // バリデーションした内容を保存する↓
        
        $speech = Speech::create([
        'activity' => $request->activity,
        'people_id' => $request->people_id,
         
    ]);
    // return redirect('people/{id}/edit');
   $person = Person::findOrFail($request->people_id);
    return redirect()->route('speech.edit', ['people_id' => $person->id]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function show(Speech $speech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request, $people_id)
{
    $person = Person::findOrFail($people_id);
    return view('speechedit', ['id' => $person->id],compact('person'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speech $speech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speech  $speech
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speech $speech)
    {
        //
    }
}
