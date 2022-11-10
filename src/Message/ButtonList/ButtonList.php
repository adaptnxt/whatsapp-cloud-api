<?php

namespace Netflie\WhatsAppCloudApi\Message\ButtonList;

class ButtonList
{
    /** @var Button[] */
    protected array $buttons;

    public function __construct(array $buttons)
    {
        $this->buttons = $buttons;
    }

    /**
     * @return Row[]
     */
    public function buttons(): array
    {
        $result = [];

        foreach ($this->buttons as $button) {
            $result[] = [
                'type' => 'reply',
                'reply' =>    [
                    'title' => $button->title(),
                    'id' => $button->id(),
                ]
            ];
        }

        return $result;
    }
}
