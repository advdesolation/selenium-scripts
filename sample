<?php
require_once('vendor/autoload.php');
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
$caps = array(
 "browser" => "Chrome",
 "browser_version" => "73.0",
 "os" => "OS X",
 "os_version" => "Mojave",
 "resolution" => "1920x1080"
);

$web_driver = RemoteWebDriver::create("https://austin249:NypQBv2AGsoCfqipDh4n@hub-cloud.browserstack.com/wd/hub", $caps);
$web_driver->get("http://google.com");
$element = $web_driver->findElement(WebDriverBy::name("q"));
if($element) {
    $element->sendKeys("Browserstack");
    $element->submit();
}
print $web_driver->getTitle();
$web_driver->quit();
?>