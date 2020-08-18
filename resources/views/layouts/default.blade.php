<!doctype html>
<html>

<head>
    @include('includes.head')

</head>

<body>
    @include('includes.header')
    <!-- <div class="container-fluid"> -->
    @yield('content')
    <!-- </div> -->
    
    <footer>
        @include('includes.footer')
    </footer>
<!--<script>
$(document).ready(function(){

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

 function fetch_data(page)
 {
  $.ajax({
   url:"/knowledge/fetch_data?page="+page,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script> -->
</body>

</html>