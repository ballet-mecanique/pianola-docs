---
title: What is Pianola?
description: Let's define Pianola in 1 sentence and break it down.
extends: _layouts.documentation
section: content
---

# What is Pianola?

## The 1-Sentence Description

> Pianola is a framework that enables the rapid development of browser-based, tailor-made administration software.

Let’s break this down:

## A Framework

Pianola is not a piece of software, but a collection of tools that makes developing software easier. It is based on a set of opinions of what every administration software and its element components should be capable of.

Developing an application with Pianola still requires coding knowledge - at the time of writing, this means knowledge of the php framework [Laravel](https://laravel.com/).

Knowledge of JavaScript is not a prerequisite for creating applications with the framework, but is a prerequisite for developers working “under the hood” on the core front-end application, as the latter is built in Vue.js.

## Rapid Development

Pianola’s primary aim is to shorten the path from idea to iteration by pre-defining an app's **basic functionality**, providing a pre-built set of **components**, and transferring the configuration to a **graphical user interface** (GUI).

While Pianola aims to cut down on the amount of code needed to program an application (and thereby aims to reduce the learning curve), it should not be understood as a “no-code/low-code” application at the time of writing, as knowledge of back-end programming (in Laravel) is required.

However, the roadmap of Pianola is charted with a low-code paradigm in mind, and the long-term aim is to allow developers to implement an increasing set of features without having to code in other languages.

## Browser-based

Pianola is a **web application** framework, i.e. the resulting application is not a piece of stand-alone software, but an application that can be opened in any modern browser.

This has the advantage of allowing Pianola applications to be accessed _without any prior installation_ and _from any location_.

While Pianola creates applications with a “desktop-first” approach - meaning that they are optimised for their primary use in an office context with full screens - it also aims to make them fully responsive, allowing them to be opened on mobile devices and tablets.

2-Factor-Authentication is a core element of Pianola applications and can be activated with a simple switch in the configuration options.

## Tailor-made

Pianola has opinions of how an admin application should work _in general_ but makes no assumptions about the specifics of the business logic of the organisations that end up using it.

In other words, Pianola is not a fully-baked, off-the-shelf solution which can be used by companies straight away. It does, however, help create applications that are geared precisely towards the needs of the organisation; nothing more, nothing less.

By trying to identify features that every application needs, but allowing enough flexibility to configure the rest, it tries to strike an optimal balance. A balance which avoids reinventing the wheel with each application, but also avoids dictating to an organisation how it should work.

Read more [in the next section](/docs/tailor-made) about the role that Pianola tries to play in the tailor-made vs off-the-shelf dichotomy.

## Administration Software

The primary audience for Pianola applications is the back-office staff of companies and organisations.

Pianola creates applications that allow an organisation’s employees to

##### interact with databases:

- create, read, update and delete data via form-based interfaces
- query data to return specific data sets
- export data for further use outside the application (e.g. Excel or Word)

##### trigger automations:

- manipulate this data in large numbers (e.g. assigning values to specific data sets)
- execute mass processes based on this data (e.g. mailings)

Pianola was originally developed to cater for the needs of the clients of Ballet Mécanique - these clients are typically cultural institutions with between 5 and 30 employees. However, Pianola’s use is not restricted to clients in the cultural or event domains, but can be envisaged for any organisation that needs a flexible way to manage and act upon its data.
