<?php

namespace App\DataFixtures\Faker\Provider;

class SkillProvider
{
    static protected $backendValues = array(
        'PHP',
        'Symfony',
        'Javascript',
        'GraphQL',
        'NodeJS',
        'Ruby',
        'Ruby on Rails',
        'Python',
        'Django',
    );

    static protected $backendTemplatesValues = array(
        'Twig',
        'Smarty',
    );

    static protected $backendDBValues = array(
        'Mysql',
        'Oracle',
        'PostgreSQL',
        'MongoDB',
    );

    static protected $frontValues = array(
        'Javascript',
        'JQuery',
        'Angular',
        'Angular 2',
        'React',
    );

    static protected $extraValues = array(
        'Api Rest',
        'Solid Patters',
        'Payment Integration',
        'SCRUM',
        'Vagrant',
    );

    public static function skillBackName(): string
    {
        shuffle(self::$backendValues);
        return array_pop(self::$backendValues);
    }

    public static function skillBackTemplateName(): string
    {
        shuffle(self::$backendTemplatesValues);
        return array_pop(self::$backendTemplatesValues);
    }

    public static function skillBackDBName(): string
    {
        shuffle(self::$backendDBValues);
        return array_pop(self::$backendDBValues);
    }

    public static function skillFrontName(): string
    {
        shuffle(self::$frontValues);
        return array_pop(self::$frontValues);
    }

    public static function skillExtraName(): string
    {
        shuffle(self::$extraValues);
        return array_pop(self::$extraValues);
    }
}