<?php
namespace C1\Femanagerextendedcustom\Domain\Model;

use In2code\Femanager\Domain\Model\User as UserFemanager;

class User extends UserFemanager
{

    /**
     * comment
     *
     * @var string
     */
    protected $comment;

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getcomment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setcomment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}
