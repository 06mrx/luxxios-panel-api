<?php

namespace App\Http\Controllers\API\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as Model;
use App\Models\Role;
use App\Models\PersonalData;
use Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $models = Model::query();

        if($request->unit_id) {
            $models = $models->where('reference_work_unit_id', $request->unit_id);
        }
        if($request->search) {
            $search = $request->search;
            $models = $models->whereHas('personalData', function($query) use ($search) {
                            $query->where('name', 'ilike', '%'.$search.'%');
                        });
                
        } 

        $models = $models->with('role:id,name')
                ->with('referenceWorkUnit:id,name')
                ->with('personalData:id,name')
                ->whereNot('role_id', Role::where('name','Administrator')->first()->id)
                ->paginate(10);
        return $this->sendResponse($models, 'Success');
    }

    public function indexTeacher(Request $request)
    {
        $models = Model::query();

        if($request->unit_id) {
            $models = $models->where('reference_work_unit_id', $request->unit_id)->where('role_id', Role::where('name','Guru')->first()->id);
        }

        if($request->search) {
            $search = $request->search;
            $models = $models->whereHas('personalData', function($query) use ($search) {
                            $query->where('name', 'ilike', '%'.$search.'%');
                        });
                
        } 

        $models = $models
                ->with('role:id,name')
                ->with('referenceWorkUnit:id,name')
                ->with('personalData:id,name,registration_number')
                ->withCount('dailyReports')
                ->where('role_id', Role::where('name','Guru')->first()->id)
                ->paginate(10);
      
                return $this->sendResponse($models, 'Success');
    }

    public function indexTeacherAndPrincipal(Request $request)
    {
        $models = Model::query();

        if($request->unit_id) {
            $models = $models->where('reference_work_unit_id', $request->unit_id)->where('role_id', Role::where('name','Guru')->first()->id);
        }

        if($request->search) {
            $search = $request->search;
            $models = $models->whereHas('personalData', function($query) use ($search) {
                            $query->where('name', 'ilike', '%'.$search.'%');
                        });
                
        } 

        $models = $models
                ->with('role:id,name')
                ->with('referenceWorkUnit:id,name')
                ->with('personalData:id,name,registration_number')
                ->withCount('dailyReports')
                ->where('role_id', Role::where('name','Guru')->first()->id)
                ->orWhere('role_id', Role::where('name','Kepala Sekolah')->first()->id)
                ->paginate(10);
      
                return $this->sendResponse($models, 'Success');
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required']
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $model = Model::FindOrFail($id);
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        // $model->role_id = $request->role_id;
        $model->save();
        return $this->sendResponse($model->id, 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Model::findOrFail($id);
        $personalData = PersonalData::where('id', $model->personal_data_id)->first();
        foreach($model->dailyReports()->get() as $dailyReport) {
            $dailyReport->delete();
        }
        $model->delete();
        $personalData->delete();
        return $this->sendResponse($model->id, 'Success');
    }
}
