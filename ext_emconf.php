<?php
/**
 * campus_events_convert2ttnewscal comes with ABSOLUTELY NO WARRANTY
 * See the GNU GeneralPublic License for more details.
 * https://www.gnu.org/licenses/gpl-2.0
 *
 * Copyright (C) 2019 Brain Appeal GmbH
 *
 * @copyright 2019 Brain Appeal GmbH (www.brain-appeal.com)
 * @license   GPL-2 (www.gnu.org/licenses/gpl-2.0)
 * @link      https://www.campus-events.com/
 */

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title' => 'CampusEvents Converter2TtNewsCal',
    'description' => '',
    'category' => 'be',
    'author' => 'Joshua Billert',
    'author_company' => 'Brain Appeal GmbH',
    'author_email' => 'info@brain-appeal.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
            'campus_events_connector' => '>=1.0.1',
            'tt_news' => '>=7.6.0',
            'newscalendar' => '>=2.1.8',
        ],
        'conflicts' => [
            'campus_events_convert2ttnews' => '>=0.0.0',
        ],
        'suggests' => [],
    ],
];
