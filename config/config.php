<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

define('PROJECT_DIR', dirname(__DIR__, 1));

const Template = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "template.php";
const FormSendApplication = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "component" . DIRECTORY_SEPARATOR . "form_send.php";
const Result = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "component" . DIRECTORY_SEPARATOR . "result.php";
const Main = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "main.php";
const FormIntegration = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "component" . DIRECTORY_SEPARATOR . "form_integration.php";
const NotFound = PROJECT_DIR . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "component" . DIRECTORY_SEPARATOR . "not_found.php";