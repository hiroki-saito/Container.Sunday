<?php
namespace MyVendor\Container\Resource\Page;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    /**
     * @param string $name
     *
     * @return ResourceObject
     */
    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }
}
