@include('restaurant/layouts/header')
@include('restaurant/layouts/sidebar')
<section class="content">
@include('restaurant/layouts/error')
    @yield('content')
</section>
@include('restaurant/layouts/footer')
