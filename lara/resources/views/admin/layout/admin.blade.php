@include(' admin.includes.header')
@include(' admin.includes.navbar')
{{-- as the body is variale so we replace it by content --}}
@yield('content') 
@include(' admin.includes.footer')