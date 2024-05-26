<?php

namespace Leafgram\TelegramBotApi;

class Request
{
    public static function getChatId()
    {
        return request()->get('message')['chat']['id'];
    }
}
