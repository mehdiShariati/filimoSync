<?php
declare(strict_types=1);

namespace App\Application\Actions\Subscription;

use App\Application\Actions\Action;
use Psr\Log\LoggerInterface;

abstract class SubscriptionAction extends Action
{
 

    /**
     * @param LoggerInterface $logger

     */
    public function __construct(LoggerInterface $logger)
    {
        parent::__construct($logger);
      
    }
}
