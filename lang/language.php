<?php

if (!isset($language)) {
    $language = 'de';
}

$fallBackLanguage = 'en';
$languageArray = [];

$languageArray['de'] = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/de.yml'));
$languageArray['en'] = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__ . '/en.yml'));

function __getTranslation($identifier, $language, $parameters)
{
    global $languageArray;

    $pathElements = explode('.', $identifier);

    $subArray = $languageArray[$language];

    foreach ($pathElements as $pathElement) {
        if (is_array($subArray) && array_key_exists($pathElement, $subArray)) {
            $subArray = $subArray[$pathElement];
        } else {
            return false;
        }
    }

    return vsprintf($subArray, $parameters);
}

function __a($link)
{
    global $language;
    echo '/' . $language . $link;
}

function __t($template)
{
    global $language;
    global $fallBackLanguage;

    $templateFile = __DIR__ . '/../web/lang/' . $language . '.' . $template;

    if (file_exists($templateFile)) {
        include_once $templateFile;
    } else {
        include_once __DIR__ . '/../web/lang/' . $fallBackLanguage . '.' . $template;
    }
}

function __($identifier)
{
    global $language;
    global $fallBackLanguage;

    $parameters = func_get_args();

    $parameters = array_reverse($parameters);
    array_pop($parameters);

    $string = __getTranslation($identifier, $language, $parameters);
    if (!$string) {
        $string = __getTranslation($identifier, $fallBackLanguage, $parameters);
    }

    echo '<span class="translated">' . $string . '</span>';
}
