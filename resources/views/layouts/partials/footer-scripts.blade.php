<script src="{{ URL::asset('js/jquery/jQuery3.3.1.js') }}"></script>
<script src="{{ URL::asset('js/popper.js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>
@foreach ($scriptsJs as $jsUrl) 
 <script src="{{ $jsUrl }}"></script>  
@endforeach