<?php

/**
 * PHP version 5.6 and 8
 *
 * @category  Logger
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @author    Hennadii.Shymanskyi <gendosua@gmail.com>
 * @copyright 2017-2024 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api/payments/v3/getting-started-v3
 */

namespace Payever\Sdk\Logger;

use Psr\Log\AbstractLogger;

/**
 * Class NullLogger
 *
 * All records are thrown away. Default logger if none explicitly provided.
 */
class NullLogger extends AbstractLogger
{
    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = [])
    {
    }
}
