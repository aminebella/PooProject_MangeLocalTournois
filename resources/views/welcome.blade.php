{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section data-bs-version="5.1" class="menu menu2" group="Menu" plugins="DropDown, TouchSwipe" always-top global once="menu" not-draggable position-absolute>
        <mbr-parameters>
            <header>Show/Hide</header>
            <input type="checkbox" title="Logo" name="showLogo" checked>
            <input type="range" title="Logo Size" inline name="logoSize" min="1" max="5" step="0.1" value="4.3" condition="showLogo">
            <input type="checkbox" title="Brand Name" name="showBrand" checked>
            <input type="checkbox" title="Menu Items" name="showItems" checked>
            <select title="Menu Items Align" name="contentAlign" condition="showItems">
                <option value="1">Left</option>
                <option value="2" selected>Center</option>
                <option value="3">Right</option>
            </select>
            <input type="checkbox" title="Icons" name="showIcons">
            <select title="Amount" name="iconsAmount" condition="showIcons">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
            </select>
            <input type="color" title="Icons Color" name="iconsColor" value="#000000" condition="showIcons">
            <input type="checkbox" title="Button" name="showButtons" checked>
            <header>Styles</header>
            <input type="checkbox" title="Collapsed" name="collapsed">
            <input type="checkbox" title="Transparent" name="transparent" checked>
            <input type="checkbox" title="Sticky" name="sticky" checked>
            <input type="range" title="Opacity" name="opacity" min="0" max="1" step="0.1" value="0.8" condition="transparent">
            <input type="color" title="Color" name="menuBgColor" value="#ffffff">
            <input type="color" title="Hamburger" name="hamburgerColor" value="#000000">
        </mbr-parameters>
    
        <nav class="navbar navbar-dropdown" mbr-class="{'navbar-fixed-top':sticky,
                         'navbar-expand-lg':!collapsed,
                         'collapsed':collapsed}">
            <div class="container">
                <div class="navbar-brand">
                    <span mbr-if="showLogo" class="navbar-logo">
                        <a href="https://mobiri.se">
                            <img src="https://r.mobirisesite.com/1054710/assets/images/gc9e41a4276303de39bee3b0ad090-h_m5fr06ac.png" alt="Mobirise Website Builder" mbr-style="{'height': logoSize + 'rem'}">
                        </a>
                    </span>
                    <span mbr-if="showBrand" mbr-buttons mbr-theme-style="display-4" class="navbar-caption-wrap" data-toolbar="-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove,-iconFont"><a class="navbar-caption text-black" data-app-selector=".navbar-caption" href="https://mobiri.se" data-app-placeholder="Type Text">Kings League</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" mbr-if="showItems || showIcons || showButtons">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" mbr-if="showItems || showIcons || showButtons">
                    <ul mbr-menu class="navbar-nav nav-dropdown" mbr-theme-style="display-4" mbr-if="showItems" mbr-class="{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}"><li class="nav-item">
                            <a class="nav-link link text-black" href="https://mobiri.se" data-app-selector=".nav-link,.dropdown-item" data-app-placeholder="Type Text">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black" href="https://mobiri.se" data-app-selector=".nav-link,.dropdown-item" data-app-placeholder="Type Text" aria-expanded="false">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black" href="https://mobiri.se" data-app-selector=".nav-link,.dropdown-item" data-app-placeholder="Type Text">Matches</a>
                        </li></ul>
                    <div class="icons-menu" mbr-if="showIcons">
                        <a class="iconfont-wrapper" href="https://mobiri.se">
                            <span mbr-icon class="p-2 mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                        </a>
                        <a class="iconfont-wrapper" href="https://mobiri.se" mbr-if="iconsAmount > 1">
                            <span mbr-icon class="p-2 mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                        </a>
                        <a class="iconfont-wrapper" href="https://mobiri.se" mbr-if="iconsAmount > 2">
                            <span mbr-icon class="p-2 mbr-iconfont mobi-mbri-map-pin mobi-mbri"></span>
                        </a>
                        <a class="iconfont-wrapper" href="https://mobiri.se" mbr-if="iconsAmount > 3">
                            <span mbr-icon class="p-2 mbr-iconfont mobi-mbri-shopping-cart mobi-mbri"></span>
                        </a>
                    </div>
                    <div mbr-if="showButtons" mbr-buttons mbr-theme-style="display-4" class="navbar-buttons mbr-section-btn"><a class="btn btn-primary" href="https://mobiri.se" data-app-placeholder="Type Text">Rankings</a></div>
                </div>
            </div>
        </nav>
    </section>
    
</body>
</html> --}}
@extends('admin.layouts.AdminStructure')

@section('title', 'Accueil')

@section('content')
<div class="text-center">
    <h1 class="display-4">Bienvenue dans l'application de Gestion de Tournoi</h1>
    <p class="lead">Organisez vos tournois facilement et suivez vos équipes, matchs, et classements.</p>
    <a href="{{ route('teams.index') }}" class="btn btn-primary">Commencer</a>
</div>
@endsection
