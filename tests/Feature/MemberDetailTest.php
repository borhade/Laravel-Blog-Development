<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Member;
///use App\post;

class MemberDetailTest extends TestCase
{
     
    public function test_MemberDetails_post(){
        $this->post('/adduser',[
            "name"=>"tejas xyz",
            "email"=>"vishalborhade61@gmail.com",
            "address"=>"navi mumbai",
        ]);
        $this->assertEquals(1,Member::count());
    }

    public function test_MemberDetails_update(){

       /*$this->post('/adduser',[
            "name"=>"tejas xyz",
            "email"=>"vishalborhade61@gmail.com",
            "address"=>"navi mumbai",
        ]);
        $this->assertEquals(2,Member::count());*/
        //$post = Member::first();  
        //var_dump($post->id);
        $response = $this->post("/update",[
            "id"=> 16,
            "address"=>"nerul",
         ]);

        $updatedpost = Member::first();
        var_dump($updatedpost);
        //$this->assertEquals($updatedpost->address,);
    }
    public function test_MemberDetails_delete(){
        $post = Member::first();  
        $this->get("/delete/{$post->id}");
        //$this->assertEquals(0,Member::count());
        $this->assertDatabaseMissing("members",["id"=>$post->id]);
    }

}
