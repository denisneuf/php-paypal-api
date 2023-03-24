<?php


namespace PayPalSdk\Core;

use PayPalSdk\Core\PayPalHttpClient;


ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{

    protected $clientId;
    //private $clientSecret;
    private $clientSecret;


    private function __construct($id = null, $secret = null)
    {
        $this->clientId = $id;
        $this->clientSecret = $secret;
    }

    public static function fromBasicData($id, $secret) {
        print "fromBasicData \n";
        $new = new static($id, $secret);
        return $new;
    }

    public static function fromJson(string $json) {
        $data = json_decode($json);
        return new static($data['id'], $data['name']);
    }

    public static function fromXml(string $xml) {
        // Custom logic here.
        $data = convert_xml_to_array($xml);
        $new = new static();
        $new->id = $data['id'];
        $new->name = $data['name'];
        return $new;
    }


    /**
     * Returns PayPal HTTP client instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    //public static function client()
    public function client()
    {
        return new PayPalHttpClient(self::environment());
        //echo "Hello World";

    }

    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    
    //public static function environment()
    public function environment()
    {

        return new SandboxEnvironment($this->clientId, $this->clientSecret);

    }
    
}