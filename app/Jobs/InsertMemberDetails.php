<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Member;

class InsertMemberDetails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle()
    {
        for($i=0;$i<10;$i++){
            $data = [
                "name"=>"vishal borhade",
                "email"=>"vishal.b@purplle.com",
                "address"=>"varadvinayak",
                "created_at"=>time(),
                "updated_at"=>time(),
            ];
        
            Member::create($data);
        }
       
    }
}
