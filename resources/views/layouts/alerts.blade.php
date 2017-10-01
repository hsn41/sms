@if(Session::has('flash_message'))
    <input type="hidden" value="{{ Session::get('flash_message') }}" id="flash_message">
    <input type="hidden" value="{{ Session::get('flash_title') }}" id="flash_title">
    <input type="hidden" value="{{ Session::get('flash_type') }}" id="flash_type">

@endif