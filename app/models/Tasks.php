<?php
namespace App\Models;

use Phalcon\Mvc\Model\ResultSetInterface;
class Tasks extends \Phalcon\Mvc\Model
{
    public static function saludo(){
        return 'hola';
    }

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $task;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("crud_phalcon");
        $this->setSource("tasks");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Tasks[]|Tasks|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find(
        mixed $parameters = null
    ): ResultsetInterface
    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Tasks|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
