<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
<script src="{{asset('client/js/jquery.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('client/js/bootstrap.min.js')}}"></script>

<style>
  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
  .row.content {
    height: 1500px;
 
  }

  /* Set gray background color and 100% height */
  .sidenav {
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height: auto;} 
  }
</style>