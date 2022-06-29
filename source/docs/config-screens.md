---
title: Config Screens
description: Pianola's config screen views explained
extends: _layouts.documentation
section: content
---

You can turn on the config screen by toggling the config mode switch in the menu:

![Config Toggle](/assets/img/config_toggle.png)

The toggle can also be activated and deactivated using **cmd-alt-k** (Mac) or **ctrl-alt-k** (Windows).

> NB: This toggle is only visible if the `APP_ENV` environment variable in your Laravel application's `.env` file is set to `local`. Also, changes to the configuration are only saved to the config files if this setting is enabled, to prevent accidental changes to the configuraton in the production environment.

When the config mode is toggled for the first time after a fresh page load, you are presented with a choice of 3 options to display the config panel:

![Config Display Preferences](/assets/img/config_display_preferences.png)

The choice you make is stored until the next reload of the page. If you want to change the display setting, just reload the page to activate this selection dialogue again.

Each setting has its benefits depending on your hardware setup:

### Modal

If you work with a single, normal-sized display, this setting might work best for you. The config panel appears as a modal dialogue when clicking on the various config buttons or on the components themselves:

![Config Modal View](/assets/img/config_mode_modal.png)

The drawback of this is that the modal tends to hide much of the background app that is being adjusted, so the changes are not visible as they are being made. This drawback is overcome in the other two options:

### Sidebar

The sidebar option opens the config panel in the right-hand third of the application window. This option is especially useful if you use a widescreen monitor, as it allows you to see both the application's main screen in its normal working size and the config panel at the same time:

![Config Widescreen View](/assets/img/config_widescreen.png)

With the operating system's screen splitting function, you can even open a code editor on the left hand side, giving you the full configuration tools in one screen:

![Config Widescreen View With Code Editor](/assets/img/config_widescreen_code_editor.png)

Note that the config panel remains open even when you turn off config mode. This allows you to configure components while seeing the application panel exactly as viewed by the users.

> It is possible to navigate through the configuration settings purely inside the navigation panel. This process is described in detail [here](/docs/config-panel-navigation).

### Separate Window

The separate window option is ideal if you work with several screens, e.g. two monitors at work or a laptop with an iPad as a second display when visiting clients:

![Config View with 2 Screens](/assets/img/config_two_screens.png)

Here, again, the config panel remains visible when you turn off config mode, allowing you to make changes while seeing the application panel in its natural state.
