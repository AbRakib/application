@include('admin.partials.head')
<!--    Main Content-->
<main class="main" id="top">
    @include('admin.partials.sidebar')
    @include('admin.partials.topbar')
    <div class="content">
        @yield('content')
        @include('admin.partials.copywrite')
    </div>
</main>
@include('admin.partials.footer')
