<?php
namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Member;
use App\Exceptions\GeneralException;

Class MemberRepository extends BaseRepository{

   public function create(array $attributes){
        $name = data_get($attributes,'name',null);  
        $email = data_get($attributes,'email',null);
        $address = data_get($attributes,'address',null);
   
       $data = Member::create([
            "name"=>$name,
            "email"=>$email,
            "address"=>$address
         ]);
      $lastId= $data->id;
      throw_if(!$lastId,GeneralException::class,"failed to create",400);
   }

   public function update(array $attributes){
      $id = data_get($attributes,'id',null);
      if($id){
         $memberDetails = Member::find($id);
         $memberDetails->name  = data_get($attributes,"name",null);
         $memberDetails->email = data_get($attributes,"email",null);
         $memberDetails->address = data_get($attributes,"address",null);
         $wasUpdated = $memberDetails->update();
         if($wasUpdated){
            return redirect("/list")->with(["success"=>"Record has been updated"]);
         }else{
            throw_if(!$wasUpdated,GeneralException::class,"Failed to Update Member",400);
         }
      }
     
      //var_dump($attributes);
      //echo"hii";
   }

   public function delete($id){
      $details  = Member::find($id);
      $wasDeleted = $details->delete();
      if($wasDeleted){
         echo"delete";
      }else{
        throw_if(!$wasDeleted,GeneralException::class,"Failed to delete Record",400);
      }
   }



}

?>