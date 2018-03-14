#<INCLUDE_TYPOSCRIPT: source="DIR:EXT:t3themes_mobapp/Configuration/TypoScript/Setup/" extensions="ts,txt,typoscript">

#### PAGE
page = PAGE
page {
    typeNum = 0
    #shortcutIcon = {$website.shortcutIcon}
    bodyTagCObject = TEXT
    bodyTagCObject.value = <body id="uid-|" data-spy="scroll" data-target="#navbar" data-offset="30">
    10 = FLUIDTEMPLATE
    10 {
        templateName = TEXT
        templateName.stdWrap.cObject = CASE
        templateName.stdWrap.cObject {
            key.data = pagelayout

            pagets__mobappclean = TEXT
            pagets__mobappclean.value = Default

            default = TEXT
            default.value = Default
        }

        templateRootPaths.0 = EXT:t3themes_mobapp/Resources/Private/Templates/Page/
        partialRootPaths.0 = EXT:t3themes_mobapp/Resources/Private/Partials/Page/
        layoutRootPaths.0 = EXT:t3themes_mobapp/Resources/Private/Layouts/Page/

        ### DATA PREPROCESSING
        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
            10 {
                levels = 2
                includeSpacer = 1
                as = mainnavigation
            }
            20 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
            20 {
                entryLevel = 1
                levels = 2
                expandAll = 0
                includeSpacer = 1
                as = subnavigation
            }
            30 = SalvatoreEckel\T3cms\DataProcessing\T3themesConfProcessor
            30 {
                fieldName = t3themes_conf
                as = t3themesConf
            }
        }

        ### VARIABLES
        variables {
            pageTitle = TEXT
            pageTitle.data = page:title
            rootPage = TEXT
            rootPage.data = leveluid:0
        }
    }
    meta {
        viewport = width=device-width, initial-scale=1, shrink-to-fit=no
        keywords.data = DB:pages:1:keywords 
        keywords.override.field = keywords 
        description.data = DB:pages:1:description 
        description.override.field = description 
        abstract.data = DB:pages:1:abstract 
        abstract.override.field = abstract 
        author.data = DB:pages:1:author 
        author.override.field = author
        web_author.data = DB:pages:1:author 
        web_author.override.field = author
    }

    #includeCSSLibs {}
    includeCSS {
        bootstrap = EXT:t3themes_mobapp/Resources/Public/css/bootstrap.min.css
        themify = EXT:t3themes_mobapp/Resources/Public/css/themify-icons.css
        owl = EXT:t3themes_mobapp/Resources/Public/css/owl.carousel.min.css
        style = EXT:t3themes_mobapp/Resources/Public/css/style.css
    }
    #includeJSLibs {}
    includeJSFooterlibs {
        jquery = EXT:t3themes_mobapp/Resources/Public/js/jquery-3.2.1.min.js
        jquery.forceOnTop = 1
        bootstrap = EXT:t3themes_mobapp/Resources/Public/js/bootstrap.bundle.min.js
        owl = EXT:t3themes_mobapp/Resources/Public/js/owl.carousel.min.js
        script = EXT:t3themes_mobapp/Resources/Public/js/script.js
    }
    #jsFooterInline {}
    headerData {
		12 = TEXT
		12.value = <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    }
}
