<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'SMALL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'assert', 'break', 'case', 'char', 'const', 'continue',
                'default', 'defined', 'do', 'else', 'enum', 'exit', 'for',
                'forward', 'goto', 'if', 'native', 'new', 'operator', 'public',
                'return', 'sizeof', 'sleep', 'static', 'stock', 'switch',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\?',
    'ignore_case' => true,
);