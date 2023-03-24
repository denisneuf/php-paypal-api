<?php

namespace PayPalSdk\disputes;

use PayPalHttp\HttpRequest;


class DisputesProvideEvidenceRequest extends HttpRequest
{
    function __construct($disputeId)
    {
    	parent::__construct("/v1/customer/disputes/{dispute_id}/provide-evidence", "POST");
    	$this->path = str_replace("{dispute_id}", urlencode($disputeId), $this->path);
    	//$this->headers["Content-Type"] = "multipart/form-data";
    	$this->headers["Content-Type"] = "multipart/related";
    }

}
