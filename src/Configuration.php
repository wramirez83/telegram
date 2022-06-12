<?php

namespace Wramirez83\Telegram;

class Configuration{

    public $url;
    public $token;
    public $channel;

    /* A constructor. It is a function that is called when an object is created. */    
    /**
     * __construct
     *@description set url and env
     * @return void
     */
    public function __construct(){
        $this->url =  'https://api.telegram.org/bot';

        // $this->channel = getenv('TELEGRAM_CHANNEL_ID');
        // $this->token = getenv('TELEGRAM_BOT_TOKEN');
        $this->token ='5382161670:AAGbLJmimjE4ZO60PEBs97d7rOJdpaFxHpo';
        $this->channel = '-1001749946940';
    }
    
}