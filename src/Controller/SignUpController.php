<?php

namespace Controller;

use Core\Config;

class SignUpController extends UsersController
{
    public function actionShow(array $data)
    {
        if (!empty($data)) {
            $this
                ->view
                ->setFolder('signup')
                ->setTemplate('show')
                ->setLayout('planeLayout')
                ->addData([]);
        } else {
            echo 321;
        }
    }


    public function actionShowEdit(array $data)
    {
    }

    public function actionAdd(array $data)
    {
        if (!empty($data['post']) && ($data['post']['login'] != '') && ($data['post']['password'] != '')&&strlen($data['post']['login']<=20)) {
            $data['post']['group_id'] = $this->table->getGroupIdByCode('user');
            $this->table->add($data['post']);
            $this->redirect('?action=loginform&type=auth');
        } else {
            $this->redirect('?action=show&type=signup');
            echo"bbbb";
        }
    }

    public function actionEdit(array $data)
    {
    }

    public function actionDel(array $data)
    {
    }
}
