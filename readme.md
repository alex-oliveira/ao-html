# Ao-Html
Resources for HTML with Laravel 5.1 + Bootstrap 3

## 1) Installation
````
$ composer require alex-oliveira/ao-html:dev-master
````

## 2) config/app.php
````
'providers' => [
    /*
     * Vendors Service Providers...
     */
    AoHtml\HtmlServiceProvider::class,
],
'aliases' => [
    /*
     * Vendors Facades
     */
    'Html' => AoHtml\HtmlFacade::class,
],
````

## 3) Template
Include package CSS in your template.
````
{!! html()->css() !!}
````
Include package JS in your template.
````
{!! html()->js() !!}
````

## 4) Elements
````
html()->tabs();
html()->tab();
html()->panels();
html()->panel();
html()->form();
html()->input();
html()->select();
html()->textarea();
html()->button();
````