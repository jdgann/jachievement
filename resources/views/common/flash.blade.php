<!-- resources/views/common/flash.blade.php -->

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

@if(Session::has('warn_flash_message'))
	<div class="alert alert-warning">
        {{ Session::get('warn_flash_message') }}
    </div>
@endif