<?php

namespace PayPalSdk\disputes;

use PayPalHttp\HttpRequest;


class DisputesSendMessageRequest extends HttpRequest
{
    //function __construct($params = null)
    function __construct($disputeId)
    {
    	parent::__construct("/v1/customer/disputes/{dispute_id}/send-message", "POST");
    	$this->path = str_replace("{dispute_id}", urlencode($disputeId), $this->path);
    	$this->headers["Content-Type"] = "application/json";
    	//$this->headers["Content-Type"] = "multipart/related";
    }

}
