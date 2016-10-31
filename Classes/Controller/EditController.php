<?php
namespace C1\Femanagerextendedcustom\Controller;

use In2code\Femanager\Controller\EditController as EditControllerFemanager;
use C1\Femanagerextendedcustom\Domain\Model\User;

/**
 * Class EditController
 *
 * @package C1\Femanagerextendedcustom\Controller
 */
class EditController extends EditControllerFemanager
{

    /**
     * action update
     *
     * @param User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function updateAction(User $user)
    {
        parent::updateAction($user);
    }
}
