<?php

namespace app\controller\paypal\sdk\disputes;

use app\controller\paypal\http\HttpRequest;


class DisputesMakeOfferRequest extends HttpRequest
{
    //function __construct($params = null)
    function __construct($disputeId)
    {
    	parent::__construct("/v1/customer/disputes/{dispute_id}/make-offer", "POST");
    	$this->path = str_replace("{dispute_id}", urlencode($disputeId), $this->path);
    	$this->headers["Content-Type"] = "application/json";
    }

}
