<?php

/**
 * Проверяет, является ли метод ответа POST
 * @return bool
 */
function isPost()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

/**
 * Проверяет установлен ли параметр $name в запросе
 * @param $name
 * @return null
 */
function getParam($name)
{
    return $_REQUEST[$name] ?? null;
}

/**
 * Отправляет переадресацию на указанную страницу
 * @param $action
 */
function redirect($action)
{
    header('Location: ' . $action . '.php');
    die;
}