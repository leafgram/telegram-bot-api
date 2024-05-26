<?php

function request()
{
    is_null(json_decode(file_get_contents('php://input'))) ? $data = $_REQUEST : $data = json_decode(file_get_contents('php://input'));

    if (filter_var(env("REQUEST_JSON_FORMAT") ?? true, FILTER_VALIDATE_BOOLEAN)) {
        return json_decode(
            json_encode([
                'header' => getallheaders(),
                'body' => $data ?? null,
                'tg' => [
                    'message' => $data?->callback_query ?? false ? $data?->callback_query : $data?->message ?? null,
                    'text' => mb_convert_encoding($data?->message?->text ?? '', 'UTF-8', 'auto'),
                    'data' => mb_convert_encoding($data?->message?->data ?? '', 'UTF-8', 'auto')
                ]
            ], JSON_FORCE_OBJECT)
        );
    }

    return [
        'header' => getallheaders(),
        'body' => (array)$data ?? null,
        'tg' => [
            'message' => (array)($data?->callback_query ?? false ? $data?->callback_query : $data?->message ?? null),
            'text' => mb_convert_encoding($data?->message?->text ?? '', 'UTF-8', 'auto'),
            'data' => mb_convert_encoding($data?->message?->data ?? '', 'UTF-8', 'auto')
        ]
    ];
}
