<?php

namespace Netflie\WhatsAppCloudApi\Request\MessageRequest;

use Netflie\WhatsAppCloudApi\Request\MessageRequest;

final class RequestButtonListMessage extends MessageRequest
{
    /**
    * {@inheritdoc}
    */
    public function body(): array
    {
        $body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => 'interactive',
            'interactive' => [
				'type' => $this->message->type(),
				'body' => ['text' => $this->message->body()],
				'action' => ['buttons' => $this->message->buttonList()],
            ],
        ];

        return $body;
    }
}
