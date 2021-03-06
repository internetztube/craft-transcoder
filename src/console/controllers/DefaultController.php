<?php
/**
 * Transcode plugin for Craft CMS 3.x
 *
 * Transcode
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 Transcode
 */

namespace nystudio107\transcoder\console\controllers;

use nystudio107\transcoder\Transcoder;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Default Command
 *
 * @author    Transcode
 * @package   Transcode
 * @since     1.0.0
 */
class DefaultController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle transcoder/default console commands
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle transcoder/default/do-something console commands
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionDoSomething() method\n";

        return $result;
    }
}
