TELEGRAM BASIC
===============================================================

## License
MIT

## CONFIGURATION
add the environment variables in the .env file
- TELEGRAM_CHANNEL_ID
- TELEGRAM_BOT_TOKEN

## FUNCTIONS

### getMe() 
Returns my dates

###  allChannels($limit = 100, $offset = null, $timeout = null)
Returns all channels in range 0 to $limit

### sendMsg($message, $chatId =  '', $mode = 'Markdown')
Send a message to a channel, $mode = 'Markdown | HTML'

### sendFile($file, $message = '', $chatId = '')
Send a file to a channel and caption for file

### curFile($file)
input route file and return the current file for CURFILE

## Ejemplo

To send a message to Telegram, you can use the method `sendMessage()`:

```php
use Wramirez83\Telegram\Telegram;
Telegram::sendMessage('Mensaje');
```

To send a message with an attached document on Telegram, you can use the method `sendDocument()`:

```php
use Wramirez83\Telegram\Telegram;
Telegram::curFile('ver.txt'), 'nuevo archivos');
```

To view updates or messages in the channel:
```php
use Wramirez83\Telegram\Telegram;
$updates = Telegram::getUpdate();
```

Send Image in a Channel you can use the method `sendPhoto()`:
```php
use Wramirez83\Telegram\Telegram;
Telegram::sendPhoto($photo, $message);
```


###
https://telegram-bot-sdk.readme.io/reference/getme
