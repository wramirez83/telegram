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

Para enviar un mensaje a Telegram, puedes usar el método `sendMessage()`:

```php
use Wramirez83\Telegram\Telegram;
Telegram::sendMessage('Mensaje');
```

Para enviar un mensaje con un documento adjunto en  Telegram, puedes usar el método `sendDocument()`:

```php
use Wramirez83\Telegram\Telegram;
Telegram::curFile('ver.txt'), 'nuevo archivos');
```

Para ver las actualizaciones o mensajes en el canal:
```php
use Wramirez83\Telegram\Telegram;
$updates = Telegram::getUpdate();
```
