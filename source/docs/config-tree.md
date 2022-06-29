---
title: he TConfig Tree
description: The structure of a Pianola app's configuration
extends: _layouts.documentation
section: content
---

As mentioned in the introduction to this section, any changes made in the configuration interface are stored in a JSON file, which contains the entire application configuration in a **nested syntax structure**.

The precise JSON syntax will be covered in a later section, but before we look into the app configuraton in more detail, it is worth looking at how the syntax tree is structured from a higher-level perspective.

## The Root Node: The App

The root of any application is the application itself.

![Tree: App](/assets/img/tree_app.png)

Every node described in this tree has its own set of settings, or **props**. In the case of the app node, this
includes things such as the company name, the primary color, the app language and the logo. These settings are among other things what determine the content of the header, and are covered in detail [here](app_config).

![Tree: App Header](/assets/img/tree_app_example.png)

## Modules

An app is split up into several modules, each covering a different entity within the database (e.g. contacts, companies):

![Tree: App](/assets/img/tree_modules.png)

The modules created in the syntax tree are represented in the navigation bar on the left:

![Tree: App Header](/assets/img/tree_modules_example.png)

The module settings are described in detail [here](module_config)

## Tabs

Within each module, you define a series of top-level tabs, which are the first level of organisation of the components within each module:

![Tree: App](/assets/img/tree_tabs.png)

The tabs only become visible, once there is more than one tab defined in a module:

![Tree: App Header](/assets/img/tree_tabs_example.png)

## Rows and Columns

The content underneath every tab is further organised into rows and columns. These are described in detail [here](tabs), but basically they are part of a grid system that help place the app's elements on the layout in a clean and structured way. Every tab has one or several rows, and every row has one or several columns:

![Tree: App](/assets/img/tree_columns.png)

The row and column structure is clearly visible in the application layout:

![Tree: App](/assets/img/tree_rows_and_columns_example.png)

## Components

![Tree: App](/assets/img/tree_components.png)

## Subcomponents
