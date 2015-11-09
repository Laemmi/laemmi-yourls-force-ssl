<?php
/*
Plugin Name: laemmi´s force SSL
Plugin URI: https://github.com/Laemmi/laemmi-yourls-force-ssl
Description: Force SSL
Version: 1.0
Author: laemmi
Author URI: https://github.com/Laemmi
Copyright 2015 laemmi
*/

/**
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @category    laemmi-yourls-force-ssl
 * @package     plugin.php
 * @author      Michael Lämmlein <ml@spacerabbit.de>
 * @copyright   ©2015 laemmi
 * @license     http://www.opensource.org/licenses/mit-license.php MIT-License
 * @version     1.0.0
 * @since       06.11.15
 */

// No direct call
if(!defined('YOURLS_ABSPATH'))die();

if (!yourls_is_API()) {
    // Check if AbstractDefault class exists
    if(class_exists('Laemmi\Yourls\Plugin\AbstractDefault')) {
        require_once 'lib/Plugin.php';
        new Laemmi\Yourls\ForceSsl\Plugin();
    } else {
        if('activate' === (isset($_GET['action']) ? $_GET['action'] : null) && 'laemmi-yourls-force-ssl' === $_GET['plugin']) {
            echo 'Please install "laemmi-yourls-default-tools" first!';
        }
    }
}