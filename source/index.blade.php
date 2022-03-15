@extends('_layouts.master')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
            <div class="mt-8">
                <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

                <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

                <p class="text-lg">Create browser-based database admin apps in a breeze. </p>

                <div class="flex my-10">
                    <a href="/docs/getting-started" title="{{ $page->siteName }} getting started"
                        class="bg-red-800 hover:bg-red-900 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get
                        Started</a>

                    <a href="/docs/about" title="Pianola by Ballet Mécanique"
                        class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About
                        Pianola</a>
                </div>
            </div>

            <img src="/assets/img/logo-standalone-white-background-red.png" alt="{{ $page->siteName }} large logo"
                class="mx-auto mb-6 lg:mb-0 pt-8" style="max-width: 280px; max-height: 280px;">
        </div>

        <hr class="block my-8 border lg:hidden">

        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

                <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Configure your app<br>with a GUI</h3>

                <p>Use Pianola's wysiwyg interface and database schema builder to speed up application development.</p>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="/assets/img/laravel-logo.svg" class="h-12 w-12" alt="terminal icon">

                <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Fully control the back-end<br> with Laravel</h3>

                <p>Use Laravel for precise control over back-end processes and to make use of everything the web
                    offers.</p>
            </div>

            <div class="mx-3 px-2 md:w-1/3">
                <img src="/assets/img/git-logo.svg" class="h-12 w-12" alt="stack icon">

                <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Version-control<br>all changes
                </h3>

                <p>Commit the generated config files to git and harness all the advantages of version control
                    and deployment
                    pipeline processes.</p>
            </div>
        </div>
    </section>
@endsection
