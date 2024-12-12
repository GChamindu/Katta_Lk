<!DOCTYPE html>
<html lang="en">

<x-head/>

<body @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': '');@endphp>

    @yield('content')
    
    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10" data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>


    <x-loader/>

   <x-scripts/>

</body>

</html>