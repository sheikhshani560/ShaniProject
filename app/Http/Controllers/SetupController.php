<?php

namespace App\Http\Controllers;

use App\Models\EventsModel;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    //
    public function EventsSetup(){
      $EventsModel = EventsModel::get();
      return view('BackEnd.EventsSetup',[
        'EventsModel'=>$EventsModel
      ]);
    }
    public function EventsSetupSave(Request $request)
    {
        $EventsModel = EventsModel::updateOrCreate(
            ['id' => $request->input('TxtID')],
            [
                'Title' => $request->input('TxtTitle'),
                'Description' => $request->input('TxtDescription')
            ]
        );

        $id = $EventsModel->id;
        $imagePaths = [];

        if ($request->hasFile('Txtimg')) {
            foreach ($request->file('Txtimg') as $image) {
                if ($image->isValid()) {
                    $image_name = 'Eventid_' . $id . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/Events');
                    $image->move($destinationPath, $image_name);
                    $imagePaths[] = $image_name;
                }
            }
            // Assuming your EventsModel has a field to store image paths as JSON
            $EventsModel->Image = json_encode($imagePaths);
            $EventsModel->save();
        }

        $message = $EventsModel ? "Saved" : 'NotSaved';
        return redirect()->back()->withErrors($message);
    }


}
