<?php

namespace App;

/**
 * Class Controller
 */
class Controller extends Injectable implements ControllerInterface
{
    /**
     * @var array
     */
    private $values = [];

    /**
     * @param string $key
     * @param mixed $data
     */
    public function setValue(string $key, $data)
    {
        $this->values[$key] = $data;
    }

    /**
     * @param mixed $data
     */
    public function setValues($data)
    {
        $this->values += $data;
    }

    /**
     * @param string $key
     * @return null|mixed
     */
    public function getValue(string $key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }

        return null;
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param string $key
     * @param mixed $data
     */
    public function __set(string $key, $data)
    {
        $this->setValue($key, $data);
    }

    /**
     * @param string $key
     * @return null|mixed
     */
    public function __get(string $key)
    {
        return $this->getValue($key);
    }
}
