<?php

session_start();
date_default_timezone_set('Europe/Madrid');

require_once __DIR__ . '/vendor/autoload.php';

use Utopia\Locale\Locale;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_ENV['ENVIRONMENT'] == 'TEST') {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}

if ($_ENV['DISABLE_CACHE'] === 1) {
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}

$languages = getLanguages($_ENV);
foreach ($languages['code'] as $lang) {
  $filename = "lang/$lang.json";
  if (file_exists($filename)) {
    Locale::setLanguageFromJSON($lang, $filename);
  }
}

$defaultLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$defaultLanguage = in_array($defaultLanguage, $languages['code']) ? $defaultLanguage : $_ENV['DEFAULT_LANG'];

$locale = new Locale($defaultLanguage);

$userLanguage = getLanguage($defaultLanguage, $_ENV);
if (!empty($_GET['lang']) && isset($_GET['lang']) && in_array($_GET['lang'], $languages['code'])) {
  $userLanguage = getLanguage($_GET['lang'], $_ENV);
  $_SESSION['lang'] = $userLanguage['code'];
} else if (!empty($_SESSION['lang']) && isset($_SESSION['lang']) && in_array($_SESSION['lang'], $languages['code'])) {
  $userLanguage = getLanguage($_SESSION['lang'], $_ENV);
}
$locale->setDefault($userLanguage['code']);

$userCurrency = $_ENV['DEFAULT_CURRENCY'];
if (!empty($_GET['currency']) && isset($_GET['currency']) && in_array($_GET['currency'], $languages['code'])) {
  $userCurrency = $_GET['currency'];
  $_SESSION['currency'] = $userCurrency;
} else if (!empty($_SESSION['currency']) && isset($_SESSION['currency']) && in_array($_SESSION['currency'], $languages['code'])) {
  $userCurrency = $_SESSION['currency'];
}

$translation = getCalendarTranslation($_ENV, $userLanguage['code']);
$calendarDisabledDates = getDisabledDates($_ENV);

$calendarMonths = $translation->calendarMonths;
$calendarDaysAbbrev = $translation->calendarDaysAbbrev;
$calendarDateFormat = $translation->calendarDateFormat;
$calendarDatePlaceholder = $translation->calendarDatePlaceholder;

function __($string, $values = []) {
  global $locale;
  return $locale->getText($string, $values);
}

function getCalendarTranslation($env, $code) {
  return httpQuery($env, 'calendar/translation', [ 'code' => $code ]);
}

function getLanguage($code, $env) {
  return json_decode(json_encode(httpQuery($env, 'language', [ 'code' => $code ])), true);
}

function getLanguages($env) {
  return json_decode(json_encode(httpQuery($env, 'language/list')), true);
}

function getDisabledDates ($env) {
  return  json_decode(json_encode(httpQuery($env, 'calendar/disabled', [ 'days' => $env['CALENDAR_CHECK_DAYS'] ])), true);
}

function getAmountValues($env) {
  return httpQuery($env, 'prices');
}

function getTotalAllowed($env) {
  return httpQuery($env, 'allowed')->value;
}

function httpQuery ($env, $path, $values = []) {
  $params = http_build_query(array_merge([ 'attraction' => $env['ATTRACTION_ID'] ], $values));
  return json_decode(file_get_contents($env['API_URL'] . "api/attraction/$path?$params"));
}

$totalAllowed = getTotalAllowed($_ENV);
$amountValues = getAmountValues($_ENV);