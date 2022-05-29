---
title: Config Screens
description: Pianola's config screen views explained
extends: _layouts.documentation
section: content
---

You can turn on the config screen by toggling the config mode switch in the menu:

![Building Blocks Overview](/assets/img/config_toggle.png)

The toggle can also be activated and deactivated using **cmd-alt-k** (Mac) or **ctrl-alt-k** (Windows).

> NB: This toggle is only visible if the `APP_ENV` environment variable in your Laravel application's `.env` file is set to `local`. Changes to the configuration are also only saved with this setting enabled, to prevent accidental changes to the configuraton in the production environment.

When the config mode is toggled for the first time after a fresh page load, you are presented with a choice of 3 display options:

![Building Blocks Overview](/assets/img/config_display_preferences.png)

The choice you make is stored until the next reload of the page. If you want to change the display setting, just reload the page to activate this selection dialogue again.
