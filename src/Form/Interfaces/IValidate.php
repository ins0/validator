<?php

namespace Form\Interfaces;

interface IValidate
{
    /**
     * Возвращает id валидатора
     * @return int|string
     */
    public function getId();

    /**
     * Валидация
     * @param mixed $value
     * @return bool
     */
    public function validate($value): bool;

    /**
     * Возвращает список ошибок
     * @return array
     */
    public function getErrors(): array;


    /**
     * Есть ошибки?
     * @return bool
     */
    public function hasError(): bool;
}
