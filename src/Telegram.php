<?php

namespace Wramirez83\Telegram;

class Telegram extends Action{


    /**
     * The function `sendMessage` sends a message to a chat with optional parameters for the chat ID
     * and message mode.
     *
     * @param message The message parameter is the content of the message that you want to send. It can
     * be a string or any other data type that can be converted to a string.
     * @param chatId The chatId parameter is used to specify the ID of the chat where the message will
     * be sent. This ID is typically obtained from the messaging platform or application that you are
     * using. It helps identify the specific chat or conversation where the message should be
     * delivered.
     * @param mode The "mode" parameter is used to specify the formatting mode for the message. The
     * default value is 'Markdown', which means the message can contain Markdown formatting syntax.
     * However, you can also pass 'HTML' as the value for the "mode" parameter if you want to use HTML
     * formatting instead.
     *
     * @return The `sendMessage` function is returning the result of the `sendMsg` method called on an
     * instance of the `Action` class.
     */
    public static function sendMessage($message, $chatId =  '', $mode = 'Markdown'){
        $instance = new Action();
        return $instance->sendMsg($message, $chatId, $mode);
    }

    /**
     * The function "sendDocument" sends a file, along with an optional message and chat ID, using the
     * "sendFile" method of the "Action" class.
     *
     * @param file The file parameter is the path or URL of the document file that you want to send. It
     * can be a local file path or a URL to a file hosted online.
     * @param message The message parameter is used to specify any additional text or caption that you
     * want to send along with the document. It can be used to provide context or instructions related
     * to the document being sent.
     * @param chatId The chatId parameter is used to specify the ID of the chat where the document will
     * be sent. This ID can be obtained from the messaging platform or application you are using to
     * send the document. It is typically a unique identifier for a specific chat or conversation.
     *
     * @return the result of the `sendFile` method called on an instance of the `Action` class.
     */
    public static function sendDocument($file, $message = '', $chatId = ''){
        $instance = new Action();
        return $instance->sendFile($file, $message = '', $chatId = '');
    }

    /**
     * The function "getUpdate" returns the updates for a specific chat ID in PHP.
     *
     * @param chatId The chatId parameter is used to specify the ID of the chat for which you want to
     * retrieve updates. It is an optional parameter, so if you don't provide a value, it will default
     * to an empty string.
     *
     * @return the result of the `getUpdates` method called on an instance of the `Action` class.
     */
    public static function getUpdate($chatId = ''){
        $instance = new Action();
        return $instance->getUpdates($chatId = '');
    }

    /**
     * The function "curFile" returns a new CURLFile object using the provided file route.
     *
     * @param routeFile The parameter "routeFile" is the file path or URL of the file that you want to
     * upload using cURL. It can be a local file path on your server or a remote file URL.
     *
     * @return An instance of the \CURLFile class.
     */
    public static function curFile($routeFile){
        return new \CURLFile($routeFile);
    }

}
