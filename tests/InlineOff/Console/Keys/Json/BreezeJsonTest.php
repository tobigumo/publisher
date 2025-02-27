<?php

/*
 * This file is part of the "laravel-lang/publisher" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/Laravel-Lang/publisher
 */

declare(strict_types=1);

namespace Tests\InlineOff\Console\Keys\Json;

use Tests\InlineOff\Console\Keys\BaseJsonTestCase;

class BreezeJsonTest extends BaseJsonTestCase
{
    protected $items = [
        'A new verification link has been sent to the email address you provided during registration.' =>
            'Новая ссылка для подтверждения была отправлена на Ваш email-адрес, указанный при регистрации.',

        'Already registered?' => 'Уже зарегистрированы?',
        'Confirm'             => 'Подтвердить',
        'Confirm Password'    => 'Подтверждение пароля',
        'Dashboard'           => 'Главная',
        'Email'               => 'E-Mail адрес',

        'Email Password Reset Link' => 'Ссылка для сброса пароля',
        'Forgot your password?'     => 'Забыли пароль?',

        'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.' =>
            'Забыли пароль? Нет проблем. Просто сообщите Ваш email-адрес и мы пришлём Вам ссылку для сброса пароля.',

        'Log in'      => 'Войти',
        'Log Out'     => 'Выйти',
        'Name'        => 'Имя',
        'Password'    => 'Пароль',
        'Register'    => 'Регистрация',
        'Remember me' => 'Запомнить меня',

        'Resend Verification Email' => 'Выслать повторно письмо для подтверждения',

        'Reset Password' => 'Сбросить пароль',

        'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.' =>
            'Спасибо за регистрацию! Прежде чем начать, не могли бы Вы подтвердить адрес своей электронной почты перейдя по ссылке, которую мы Вам отправили? Если Вы не получили письмо, мы с радостью отправим новое.',

        'This is a secure area of the application. Please confirm your password before continuing.' =>
            'Это защищённая область приложения. Пожалуйста, подтвердите Ваш пароль, прежде чем продолжить.',

        'Whoops! Something went wrong.' => 'Упс! Что-то пошло не так.',
    ];
}
