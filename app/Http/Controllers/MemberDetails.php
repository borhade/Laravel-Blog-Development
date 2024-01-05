<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lib\CustomClass;
use App\Member;
use App\post;
use Illuminate\Support\Facades\DB;
use App\Services\Geolocation\Geolocation;
use App\Repositories\MemberRepository;
//use App\Exceptions\GeneralException;
use App\Http\Requests\ValidationRequest;
use App\Jobs\InsertMemberDetails;
class MemberDetails extends Controller
{
    public $geolocation;
    public function __construct(Geolocation $geolocation)
    {
        $this->geolocation=$geolocation;
    }
    
    public function index(){
       $checkcustom = new CustomClass;
       $res = $checkcustom->getName();
        var_dump($res["name"]);
        //$res = $checkcustom->someFunction();
       // var_dump($checkcustom);
      //$data=Member::all();
      //return view("userlist",["members"=>$data]);
    }


    //Eager and Lazy loading learning
    /* public function show(){
        $data = Member::with("getMember")->get();
        foreach($data as $key=>$value){
            dump($value->id);
            dump($value->getMember->title);
       }
    } */

    public function show(){

        $data =[
           2,3,4,5
        ];

       $result = collect($data)->reverse(3);
        //$result = collect($data)->chunk(2);

        //$res =  collect($data)->avg();
        dd($result);

      //$members = Member::orderBy("id","desc")->get();
       //$res = $this->geolocation->search('abs');
      //$members = Member::with("getMember")->get();
       //return view("userlist",compact("members",$members));
    }
//ValidationRequest $req 
    public function store(Request $req,MemberRepository $memberRepository){
       
        //Dispatch(new InsertMemberDetails());
        //InsertMemberDetails::dispatch();
        $data = $req->only(["name","email","address"]);
        $req->validate([
            "name"=>"required|string",
            "email"=>"required",
            "address"=>"required",
        ]);
        $memberRepository->create($data);
    }

    public function deleteUser($id,MemberRepository $memberRepository){
        $memberRepository->delete($id);
    }
    
    public function showData($id){
        $data = Member::find($id);
        return view('edit',["memberResult"=>$data]);
    }
    public function update(ValidationRequest $req, MemberRepository $memberRepository){
        $data = $req->only(['id','name','email','address']);
        $memberRepository->update($data);
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
        $member = new Member();
        $member->name = $req->name;
        $member->email =  $req->email;
        $member->address = $req->address;
        $result = $member->save();
        return ["result"=>$result]; 

    }
}
