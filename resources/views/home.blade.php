{{-- Manually create a subview or make a subview on command line --}}
{{-- php artisan make:view common.header --}}
{{-- php artisan make:view common.inner --}}

{{-- include subview --}}
@include('common.header')
<h1>Home Page</h1>
{{-- include another subview and pass data--}}
{{-- @include('common.inner', ['page' => 'This is home page']) --}}
{{-- include subview with a loop --}}

{{-- if not exist, throw 404 not found  --}}
{{-- @include('common.abc', ['page' => 'This is home page']) --}}

{{-- use includeIf, no error --}}
{{-- check file if existing or not --}}
{{-- not exist, throw 404 --}}
{{-- @includeIf('common.abc', ['page' => 'This is home page']) --}}
{{-- exist, show view --}}
@includeIf('common.inner', ['page' => 'This is home page'])

