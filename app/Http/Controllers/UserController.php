<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function show(){
        //echo $data = Company::all();
        $data = DB::table("companies")
                    ->select("id","company_name","email")
                    ->orderByDesc("id")
                    //->limit(2)
                    ->get();
        
        $result_array = json_decode(json_encode($data),true); 
        return view("companylist",["list"=>$result_array]);      
    }


    public function createDetails(Request $req){  
        $data =[
            "company_name"=>$req->post("name"),
            "email"=>$req->post("email"),
            "address"=>$req->post("address"),
        ];

        Company::create($data);
        return redirect('/getDetails')->with([
            'message' => 'Company Has Been updated Successfully',
        ]);
    }

    public function removeCompanyDetails($id){
        if($id){
            $data = Company::destroy($id);
            return redirect("/getDetails")->with([
                "message"=>"Company has been deleted Successfully !"
            ]);
        }
    }

    public function editCompanyDetails($id){
        $editData = Company::find($id);
        return view("editcompanydetails",["editData"=>$editData]);
    }

    public function updateCompanyDetails(Request $req){

        $companyData = Company::find($req->post("id"));
        //var_dump($companyData);
        $companyData->company_name = $req->post("company_name");
        $companyData->save();
        return redirect("/getDetails")->with([
            "message"=>"Company has been deleted Successfully !"
        ]);

    }

}
