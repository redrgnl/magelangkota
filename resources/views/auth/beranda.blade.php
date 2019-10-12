@extends('layouts.app')

@section('content')

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        <div class="row">
                            <div class="input-field col s12">
                                <a href="/publik" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">PUBLIK</a>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="input-field col s12">
                                <a href="/login" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">LOGIN MEMBER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection