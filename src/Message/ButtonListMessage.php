<?php

namespace Netflie\WhatsAppCloudApi\Message;

use Netflie\WhatsAppCloudApi\Message\ButtonList\ButtonList;

class ButtonListMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    protected string $type = 'button';

    protected string $body;

    protected ButtonList $buttonList;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, string $body, ButtonList $buttonList)
    {
		$this->buttonList = $buttonList;

        $this->body = $body;

        parent::__construct($to);
    }

    public function body(): string
    {
        return $this->body;
    }

    public function buttonList(): array
    {
        return $this->buttonList->buttons();
    }
}
