<?php

namespace Leafgram\TelegramBotApi;

class Request
{

    public function update()
    {
        is_null(json_decode(file_get_contents('php://input'))) ? $data = $_REQUEST : $data = json_decode(file_get_contents('php://input'));
        return $data;
    }

    public static function getMessage()
    {
        return request()->get('message') ?? null;
    }

    public static function getId()
    {
        if (isset(request()->get('inline_query')['from'])) {
            return request()->get('inline_query')['from']['id'];
        }
        
        if (isset(request()->get('message')['']))
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





    public static function getText()
    {
        return request()->get('message')['text'] ?? null;
    }

    public static function getAnimation()
    {
        return request()->get('message')['animation'] ?? null;
    }

    public static function getAudio()
    {
        return request()->get('message')['audio'] ?? null;
    }

    public static function getDocument()
    {
        return request()->get('message')['document'] ?? null;
    }

    public static function getPhoto()
    {
        return request()->get('message')['photo'] ?? null;
    }

    public static function getVideo()
    {
        return request()->get('message')['video'] ?? null;
    }

    public static function getVideoNote()
    {
        return request()->get('message')['video_note'] ?? null;
    }

    public static function getSticker()
    {
        return request()->get('message')['sticker'] ?? null;
    }

    public static function getVoice()
    {
        return request()->get('message')['voice'] ?? null;
    }

    public static function getCaption()
    {
        return request()->get('message')['caption'] ?? null;
    }

    public static function getContact()
    {
        return request()->get('message')['contact'] ?? null;
    }

    public static function getLocation()
    {
        return request()->get('message')['location'] ?? null;
    }





    public static function getInlineQuery()
    {
        return $this->update?->inline_query ?? null;
    }

    public static function getInlineQueryFrom()
    {
        return $this->update?->inline_query?->from ?? null;
    }

    public static function getInlineQueryFromId()
    {
        return request()->get('inline_query')['from']['id'] ?? null;
    }

    public static function getInlineQueryId()
    {
        return request()->get('inline_query')['id'] ?? null;
    }

    public static function getQuery()
    {
        return request()->get('inline_query')['query'] ?? null;
    }
}
