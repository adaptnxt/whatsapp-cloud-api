<?php

namespace Netflie\WhatsAppCloudApi\Request;

use Netflie\WhatsAppCloudApi\Message\ButtonListMessage;
use Netflie\WhatsAppCloudApi\Request;

/**
 * @property ButtonListMessage $message
 */
class RequestButtonListMessage extends Request
{
    /**
    * {@inheritdoc}
    */
    protected function makeBody(): void
    {
        $this->body = [
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
    }
}
