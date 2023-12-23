<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorBorrowerRequest;
use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{ public function index()
    {
        $borrower=Borrower::all();
        return view('BorrowerView.display',compact('borrower'));
    }

    public function create()
    {
        return view('BorrowerView.create');
    }

  
    public function store(StorBorrowerRequest $request)
    {
        Borrower::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);
        
        return redirect()->route('borrower.index')->with('success','Created Successfully!');
    }

    
    public function show(Borrower $borrower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $borrower=Borrower::findorfail($id);
        return view('BorrowerView.edit',compact('borrower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorBorrowerRequest $request, $id)
    {
        $borrower=Borrower::findorfail($id);
        $borrower->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
        ]);

       return redirect()->route('borrower.index')->with('success','Updated Successfully!');

    }

    
    public function destroy($id)
    {
        Borrower::destroy($id);
       return redirect()->route('borrower.index')->with('success','Deleted Successfully!');

    }
}
