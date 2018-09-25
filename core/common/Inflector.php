<?php
/**
 * @link      http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */

namespace app\common;

use yii\helpers\BaseInflector;

/**
 * Inflector pluralizes and singularizes English nouns. It also contains some other useful methods.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since  2.0
 */
class Inflector extends BaseInflector
{
    public static $transliterator = 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;';
}
