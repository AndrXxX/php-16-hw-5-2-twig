<?php

class UserController extends BaseController
{
    protected $modelName = 'User';
    protected $template = 'userRegister.twig';

    /**
     * Форма входа пользователя
     */
    public function getAdd()
    {
        $this->render($this->template);
    }

    /**
     * Выполняет авторизацию или регистрацию
     * @param $params
     * @param $post
     */

    public function postAdd($params, $post)
    {
        if (isPost()) {
            if ((getParam('sign_in') && $this->getThisModel()->checkForLogin(getParam('login'), getParam('password'))) OR
                (getParam('register') && $this->getThisModel()->register(getParam('login'), getParam('password')))) {
                redirect('index');
            }
        }
    }

    /**
     * Возвращает текущую модель
     * @return User
     */
    protected function getThisModel()
    {
        return $this->model;
    }

    /**
     * Выход из пользователя
     */
    public function getLogout()
    {
        $this->getThisModel()->logout();
    }

}

