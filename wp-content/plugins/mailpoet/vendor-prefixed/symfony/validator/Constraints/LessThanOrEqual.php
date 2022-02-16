<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
class LessThanOrEqual extends AbstractComparison
{
 public const TOO_HIGH_ERROR = '30fbb013-d015-4232-8b3b-8f3be97a7e14';
 protected static $errorNames = [self::TOO_HIGH_ERROR => 'TOO_HIGH_ERROR'];
 public $message = 'This value should be less than or equal to {{ compared_value }}.';
}
