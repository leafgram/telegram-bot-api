<?php

namespace Leafgram\TelegramBotApi;

class Request
{

    public static function getMessage()
    {
        return request()->get('message') ?? null;
    }

    public static function getMessageId()
    {
        return request()->get('message')['message_id'] ?? null;
    }



    public static function getChat()
    {
        return request()->get('message')['chat'] ?? null;
    }

    public static function getChatId()
    {
        return request()->get('message')['chat']['id'] ?? null;
    }

    public static function getChatFirstname()
    {
        return request()->get('message')['chat']['first_name'] ?? null;
    }

    public static function getChatUsername()
    {
        return request()->get('message')['chat']['username'] ?? null;
    }

    public static function getChatTitle()
    {
        return request()->get('message')['chat']['title'] ?? null;
    }

    public static function getChatType()
    {
        return request()->get('message')['chat']['type'] ?? null;
    }






    public static function getFrom()
    {
        return request()->get('message')['from'] ?? null;
    }

    public static function getFromId()
    {
        return request()->get('message')['from']['id'] ?? null;
    }

    public static function getFromFirstname()
    {
        return request()->get('message')['from']['first_name'] ?? null;
    }

    public static function getFromLastname()
    {
        return request()->get('message')['from']['last_name'] ?? null;
    }

    public static function getFromUsername()
    {
        return request()->get('message')['from']['username'] ?? null;
    }





    public static function getSenderChat()
    {
        return request()->get('message')['sender_chat'] ?? null;
    }

    public static function getSenderChatId()
    {
        return request()->get('message')['sender_chat']['id'] ?? null;
    }

    public static function getSenderChatTitle()
    {
        return request()->get('message')['sender_chat']['title'] ?? null;
    }

    public static function getSenderChatUsername()
    {
        return request()->get('message')['sender_chat']['username'] ?? null;
    }

    public static function getSenderChatType()
    {
        return request()->get('message')['sender_chat']['type'] ?? null;
    }
}
