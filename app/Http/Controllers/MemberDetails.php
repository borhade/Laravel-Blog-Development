<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Member,group
};
use Illuminate\Support\Facades\DB;
class MemberDetails extends Controller
{
    public function show(){
     return  $data = Member::with("getGroup")->get();
          //$data = group::with("getMember")->first();
         // dump($data->getGroup);
      //echo $data->getGroup;
     //return view("userlist",["members"=>$data]);
    }

    public function addUser(Request $req ){
        $member = new Member();
        $member->name = $req->input("name");
        $member->email = $req->input("email");
        $member->address = $req->input("address");
        $member->save();
    }

    public function deleteUser($id){
        //$member = new Member();
        $res= Member::find($id);
        $res->delete();
    }

    public function showData($id){
        $data = Member::find($id);
        return view('edit',["memberResult"=>$data]);

    }
    public function update(Request $req){
        $member = Member::find($req->id);
        $member->name = $req->input("name");
        $member->email = $req->input("email");
        $member->address = $req->input("address");
        $member->save();
    }

    //check accessor and mutator
    public function test(){
        echo $data = Member::all();
    }

    public function set_test(){
        $member = new Member();
        $member->name = "Mahesh";
        $member->email = "mahes@gmail.com";
        $member->address = "kamothe"; 
        $member->save();
    }

    public function testHasOne(){
       echo $data = Member::find(2)->getCompanyDetails;
    }

    public function testPathModeling(Member $key){
        echo $key->all();
    }

    /*----------------Rest Api Part----------------------*/
    public function checkList($id){
        $data = DB::table('members as m')
                    ->select(['m.id','m.name','c.member_id'])
                    ->join('companies as c', 'm.id', '=', 'c.member_id')
                    //->where('m.id',$id)
                    ->get();
        return $data;
      //return Member::all();
    }

    public function memberRemove($id){
        $data = Member::find($id);
        $res = $data->delete();
        return ["result"=>$res];
    }

    public function addMember(Request $req){
        $member= new Member();
        $member->name = $req->name;
        $member->email =  $req->email;
        $member->address = $req->address;
        $result = $member->save();
        return ["result"=>$result];

    }





}
