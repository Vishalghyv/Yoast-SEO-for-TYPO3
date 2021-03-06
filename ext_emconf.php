<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Yoast SEO for TYPO3',
    'description' => 'Optimise your website for search engines with Yoast SEO for TYPO3. With this extension you get all the technical SEO stuff you need and will help editors to write high quality content.',
    'category' => 'misc',
    'author' => 'MaxServ / Yoast',
    'author_company' => 'MaxServ B.V., Yoast',
    'author_email' => '',
    'clearCacheOnLoad' => 0,
    'dependencies' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'version' => '6.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-10.4.99',
        ),
        'conflicts' => array(),
        'suggests' => array(
            'seo' => ''
        ),
    ),
    'autoload' => array(
        'psr-4' => array('YoastSeoForTypo3\\YoastSeo\\' => 'Classes')
    ),
);
