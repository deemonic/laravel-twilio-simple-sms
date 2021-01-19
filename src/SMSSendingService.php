<?php

namespace Deemonic;

use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class SMSSendingService
{
    /**
     * @var array|false|string
     */
    private $sid;

    /**
     * @var array|false|string
     */
    private $token;

    /**
     * @var string
     */
    public $from_number;

    /**
     * @var string
     */
    public $to_number;

    /**
     * @var string
     */
    public $message;

    /**
     * Assign Twilio sid and token properties using .env variables
     *
     * SMSSendingService constructor.
     */
    public function __construct()
    {
        $this->sid = getenv("TWILIO_ACCOUNT_SID");
        $this->token = getenv("TWILIO_AUTH_TOKEN");
    }

    /**
     * @param $number
     * @param $message
     * @throws ConfigurationException
     * @throws TwilioException
     */
    public function send($from_number,$to_number, $message)
    {
        // Assign properties and construct request body
        $this->from_number = $from_number;
        $this->to_number = $to_number;
        $this->message = $message;
        $request = self::buildRequest();

        // Send message using Twilio API
        $client = new Client($this->sid, $this->token);
        $client->messages->create($this->to_number, $request);

    }

    /**
     * @return array
     */
    private function buildRequest(): array
    {
        return ['from' => $this->from_number, 'body' => $this->message];
    }

}
