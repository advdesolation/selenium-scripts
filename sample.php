<?php
require_once('vendor/autoload.php');
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverKeys;
$caps = array(
 "browser" => "Chrome",
 "browser_version" => "73.0",
 "os" => "OS X",
 "os_version" => "Mojave",
 "resolution" => "1920x1080",
 "browserstack.debug" => true
);

$web_driver = RemoteWebDriver::create("https://austin249:NypQBv2AGsoCfqipDh4n@hub-cloud.browserstack.com/wd/hub", $caps);
$web_driver->get("http://nacl.foldingathome.org/");
$element = $web_driver->findElement(WebDriverBy::name("user"));
$element->sendKeys("Foxxo");
$element = $web_driver->findElement(WebDriverBy::name("team"));
$element->sendKeys("233478");
$element = $web_driver->findElement(WebDriverBy::name("slider"));
$element->sendKeys(Keys.RIGHT);
print $web_driver->getTitle();
$web_driver->quit();
?>
