<?php

namespace Wramirez83\Telegram;

class Action{

    protected $ch;
    protected $config;

    /**
     * The constructor for the class `Configuration` is called and the result is assigned to the
     * variable `->config`
     */    
    /**
     * __construct
     *@description Call this method for each configuration
     * @return void
     */
    public function __construct(){
        $this->config = new Configuration();        
    }

    /**
     * It converts the data into a json object.
     * 
     * @param data The data you want to send to the server.
     * 
     * @return The response data is being returned as a json object.
     */
    public function response($data){
        return $responseData = json_decode($data);
    }
    /**
     * It initializes the curl session.
     */
    public function init(){
        $this->ch = curl_init();
    }

    /**
     * It closes the curl connection.
     */
    private function close(){
        curl_close($this->ch);
    }
    /**
     * It sets the url for the curl request.
     * 
     * @param url The url of the API you want to call.
     * @param header The header is the type of data you want to receive.
     * 
     * @return The response from the API.
     */
    private function setUrl($url, $header = ["Accept: application/json"]){

        if(!isset($this->config->token) && $this->config->token == '' && $url == '')
            return ['ok' => false];

        curl_setopt($this->ch , CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->ch , CURLOPT_URL, $this->config->url . $this->config->token . '/' . $url);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $header);
        $data = curl_exec($this->ch);
        return $this->response($data);
    }


    /**
     * It returns the bot's username.
     * 
     * @return The method is returning the value of the setUrl method.
     */
    public function getMe(){
        return $this->setUrl('getMe');
    }

    /**
     * It gets all the channels that the bot is in.
     * 
     * @param limit The number of updates to be retrieved.
     * @param offset The offset is the update_id of the last update you've received. If you don't know
     * what this is, you can set it to 0.
     * @param timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling
     * 
     * @return An array of all the channels that have been updated.
     */
    public function allChannels($limit = 100, $offset = null, $timeout = null){
        $post = [
            "offset" => $offset, 
            "limit" => $limit,
            "timeout" => $timeout
        ];
        $this->init();
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post);
        $data = $this->setUrl('getUpdates');
        $this->close();
        return $data;
    }

    /**
     * It sends a message to a chat.
     * 
     * @param message The message you want to send.
     * @param chatId The chat id of the channel or group you want to send the message to.
     * @param mode Markdown or HTML
     * 
     * @return The response from the server.
     */
    public function sendMsg($message, $chatId =  '', $mode = 'Markdown'){
        if($chatId == '')
            $chatId = $this->config->channel;
        $post = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => $mode
        ];
       
        $this->init();
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post);
        $data = $this->setUrl('sendMessage');
        $this->close();
        return $data;

    }

    /**
     * It sends a file to the channel.
     * 
     * @param file The file to send.
     * @param message The message you want to send.
     * @param chatId The chat ID of the chat you want to send the message to. If you don't specify it,
     * it will send it to the channel you specified in the config.
     * 
     * @return The response from the server.
     */
    public function sendFile($file, $message = '', $chatId = ''){
        if($chatId == '')
            $chatId = $this->config->channel;
        $post = [
            'chat_id' => $chatId,
            'caption' => $message,
            'document' => $file
        ];
       
        $this->init();
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post);
        $data = $this->setUrl('sendDocument');
        $this->close();
        return $data;
    }

}

