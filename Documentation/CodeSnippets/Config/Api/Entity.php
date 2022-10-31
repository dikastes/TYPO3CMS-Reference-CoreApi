<?php

return [
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\Routing\PageArguments::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/PageArguments.rst.txt',
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Backend\Routing\Route::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/Route.rst.txt',
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\Site\Entity\Site::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/Site.rst.txt',
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\Site\Entity\SiteLanguage::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/SiteLanguage.rst.txt',
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\Http\NormalizedParams::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/NormalizedParams.rst.txt',
        'members' => [
            'getDocumentRoot',
            'getHttpAcceptEncoding',
            'getHttpAcceptLanguage',
            'getHttpHost',
            'getHttpReferer',
            'getHttpUserAgent',
            'getQueryString',
            'getPathInfo',
            'getRemoteAddress',
            'getRemoteHost',
            'getRequestDir',
            'getRequestHost',
            'getRequestHostOnly',
            'getRequestPort',
            'getRequestScript',
            'getRequestUri',
            'getRequestUrl',
            'getScriptFilename',
            'getScriptName',
            'getSitePath',
            'getSiteScript',
            'getSiteUrl',
            'isBehindReverseProxy',
            'isHttps',
        ],
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\TypoScript\FrontendTypoScript::class,
        'targetFileName' => 'CodeSnippets/Manual/Entity/FrontendTypoScript.rst.txt',
        'withCode' => false,
    ],
];
