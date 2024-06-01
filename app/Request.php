<?php

namespace Leafgram\TelegramBotApi;

class Request
{

    public static function update()
    {
        is_null(json_decode(file_get_contents('php://input'))) ? $data = $_REQUEST : $data = json_decode(file_get_contents('php://input'));
        return $data;
    }

    public static function getMessage()
    {
        return self::update()?->message ?? null;
    }

    public static function getMessageId()
    {
        return self::getMessage()->message_id ?? null;
    }

    public static function getChat()
    {
        return self::getMessage()->chat ?? null;
    }

    public static function getChatId()
    {
        return self::getChat()->id ?? null;
    }

    public static function getChatFirstname()
    {
        return self::getChat()->first_name ?? null;
    }

    public static function getChatLastname()
    {
        return self::getChat()->last_name ?? null;
    }

    public static function getChatUsername()
    {
        return self::getChat()->username ?? null;
    }

    public static function getChatTitle()
    {
        return self::getChat()->title ?? null;
    }

    public static function getChatType()
    {
        return self::getChat()->type ?? null;
    }






    public static function getFrom()
    {
        return self::getMessage()->from ?? null;
    }

    public static function getFromId()
    {
        return self::getFrom()->id ?? null;
    }

    public static function getFromFirstname()
    {
        return self::getFrom()->first_name ?? null;
    }

    public static function getFromLastname()
    {
        return self::getFrom()->last_name ?? null;
    }

    public static function getFromUsername()
    {
        return self::getFrom()->username ?? null;
    }





    public static function getSenderChat()
    {
        return self::getMessage()->sender_chat ?? null;
    }

    public static function getSenderChatId()
    {
        return self::getSenderChat()->id ?? null;
    }

    public static function getSenderChatTitle()
    {
        return self::getSenderChat()->title ?? null;
    }

    public static function getSenderChatUsername()
    {
        return self::getSenderChat()->username ?? null;
    }

    public static function getSenderChatType()
    {
        return self::getSenderChat()->type ?? null;
    }





    public static function getText()
    {
        return self::getMessage()->text ?? null;
    }

    public static function getAnimation()
    {
        return self::getMessage()->animation ?? null;
    }

    public static function getAudio()
    {
        return self::getMessage()->audio ?? null;
    }

    public static function getDocument()
    {
        return self::getMessage()->document ?? null;
    }

    public static function getPhoto()
    {
        return self::getMessage()->photo ?? null;
    }

    public static function getVideo()
    {
        return self::getMessage()->video ?? null;
    }

    public static function getVideoNote()
    {
        return self::getMessage()->video_note ?? null;
    }

    public static function getSticker()
    {
        return self::getMessage()->sticker ?? null;
    }

    public static function getVoice()
    {
        return self::getMessage()->voice ?? null;
    }

    public static function getCaption()
    {
        return self::getMessage()->caption ?? null;
    }

    public static function getContact()
    {
        return self::getMessage()->contact ?? null;
    }

    public static function getLocation()
    {
        return self::getMessage()->location ?? null;
    }





    public static function getInlineQuery()
    {
        return self::update()?->inline_query ?? null;
    }

    public static function getInlineQueryFrom()
    {
        return self::getInlineQuery()?->from ?? null;
    }

    public static function getInlineQueryFromId()
    {
        return self::getInlineQueryFrom()?->id ?? null;
    }

    public static function getInlineQueryId()
    {
        return self::getInlineQuery()?->id ?? null;
    }

    public static function getQuery()
    {
        return self::getInlineQuery()?->query ?? null;
    }
}
