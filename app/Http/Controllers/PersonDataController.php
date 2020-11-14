<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonData;

class PersonDataController extends Controller
{
    //(menampilkan semua data)
    public function index(){
        return response([
            'status'=>'OK',
            'message'=>'Data Berhasil Ditampilkan',
            'data'=>PersonData::all()
        ],200);
    }

    //(menyimpan data)
    public function create(request $request){
        $persondata = new PersonData;
        $persondata->nama = $request->nama;
        $persondata->alamat = $request->alamat;
        $persondata->no_npwp = $request->no_npwp;
        $persondata->phone = $request->phone;
        $persondata->email = $request->email;
        $persondata->created_at=now();
        $persondata->save();

        return response([
            'status'=>'OK',
            'message'=>'Data Berhasil Disimpan',
            'data'=>$persondata
        ],200);
    }

    //(update data)
    public function update(request $request,$id){
        $check_persondata = PersonData::firstWhere('id',$id);
        if($check_persondata){
            $nama = $request->nama;
            $alamat = $request->alamat;
            $no_npwp = $request->no_npwp;
            $phone = $request->phone;
            $email = $request->email;
            $updated_at=now();        

            $persondata = PersonData::find($id);
            $persondata->nama = $nama;
            $persondata->alamat = $alamat;
            $persondata->no_npwp = $no_npwp;
            $persondata->phone = $phone;
            $persondata->email = $email;
            $persondata->updated_at = $updated_at;
            $persondata->save();

            return response([
                'status'=>'OK',
                'message'=>'Data Berhasil Dirubah',
                'data'=>$persondata
            ],200);

        }else{
            return response([
                'status'=>'Not Found',
                'message'=>'No Customer Tidak Ditemukan'
            ],404);
        }

        // $nama = $request->nama;
        // $alamat = $request->alamat;
        // $no_npwp = $request->no_npwp;
        // $phone = $request->phone;
        // $email = $request->email;
        // // $updated_at=now();        

        // $persondata = PersonData::find($id);
        // $persondata->nama = $nama;
        // $persondata->alamat = $alamat;
        // $persondata->no_npwp = $no_npwp;
        // $persondata->phone = $phone;
        // $persondata->email = $email;
        // // $persondata->updated_at = $updated_at;
        // $persondata->save();

        // return response([
        //     'status'=>'OK',
        //     'message'=>'Data Berhasil Dirubah',
        //     'data'=>$persondata
        // ],200);
        
    }

    //menghapus Data
    public function delete($id){
        $check_persondata = PersonData::firstWhere('id',$id);
        if($check_persondata){
            PersonData::destroy($id);
            return response([
                'status'=>'OK',
                'message'=>'Data Dihapus'
            ],200);
        }else{
            return response([
                'status'=>'Not Found',
                'message'=>'No Customer Tidak Ditemukan'
            ],404);
        }
    }

}
