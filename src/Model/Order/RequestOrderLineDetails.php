<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestOrderLineDetails implements ModelInterface
{
    use IdTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $fields;

    /**
     * Gets fields value.
     *
     * @return string
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets fields variable.
     *
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }
}
