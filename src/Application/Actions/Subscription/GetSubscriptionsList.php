<?php

namespace App\Application\Actions\Subscription;

use Psr\Http\Message\ResponseInterface as Response;

 

class GetSubsCriptionsList extends SubscriptionAction{

    protected function action(): Response
    {
        
    \Stripe\Stripe::setApiKey(getenv("SECRET_KEY"));


    $data=\Stripe\Subscription::all(['limit' => 6]);
      

        $this->logger->info("First list was viewed.");
        $subData=[];
        foreach($data->data as $perData){

                     array_push($subData,['sub_id'=>$perData['id'],
                   'customer_id'=>$perData['customer']
                                     ]);
                                  }
  
        return $this->respondWithData($data);
    }



}