[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

# [HumHub](https://github.com/humhub/humhub) Weather Widget

![HumHub Weather Widget Day](https://raw.githubusercontent.com/zauberware/humhub-weather-module/master/assets/sample1.png) ![HumHub Weather Widget Night](https://raw.githubusercontent.com/zauberware/humhub-weather-module/master/assets/sample2.png)

__!! This plugin is under development. See Open tasks section !!__

__This module is for HumHub Version 1.1+__

## Description

This module attaches a simple weather widget in the dashboard's sidebar. It get's is data from <https://openweathermap.org/api>. You have to obtain an ApiKey first. 

As an admin you can define the location from where you want to show the current weather. You can also choose Kelvin or Fahrenheit for displaying the temperature. The title color in the widget is getting set by less variable `@primary` for that theme.

## Dependencies

The plugins includes the awesome jQuery wrapper for openweathermap API: <https://github.com/michael-lynch/open-weather>
    
## Installation
1. Download the module and upload it to your modules directory >yourdomain.com>protected>modules
2. Rename module directory ```weather``` (May not be required!)
3. Enable module from >Admin>Modules
4. Enter API Key and location

## Open Tasks for v1.0
* load michael-lynch/open-weather with package manager
* testing different HumHub versions
* Specs

## Changelog

### v0.2.1
* Adding option for windspeed in km/h OR Mps

### v0.2
* Removed static translations and export keys
* Translations german and english
* set language in js from current user language
* set language in js from current user language
* setting text color from less var @primary

### v0.1
* Basic module with config for API Key and Location
* Include JS bib + old sourcecode


## Authors/Module Website

__Module website:__ <https://github.com/zauberware/humhub-weather-module>  

__Author website:__ [https://www.zauberware.com](https://www.zauberware.com)    
__Author:__ zauberware technologies / Simon Franzen <simon@zauberware.com>  

![zauberware technologies](https://avatars3.githubusercontent.com/u/1753330?s=200&v=4)

