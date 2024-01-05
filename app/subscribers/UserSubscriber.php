<?php 
namespace App\subscribers;
use App\Events\UserCreated;
use App\Listeners\SendEmail;
use Illuminate\Events\Dispatcher;

Class UserSubscriber {

 public function subscribe(Dispatcher $events){
   
    $events->listen(UserCreated::class,SendEmail::class);

 }

    
}

?>