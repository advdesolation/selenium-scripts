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
 "browserstack.debug" => true,
 "browserstack.networkLogs" => true
 "
);

$web_driver = RemoteWebDriver::create("https://austin249:NypQBv2AGsoCfqipDh4n@hub-cloud.browserstack.com/wd/hub", $caps);
$web_driver->get("https://youtu.be/KqpBXCv1EsM");
while (true) {
echo $web_driver->getTitle();
sleep(30);
};
$web_driver->quit();
?>
