@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{ session('warning') }}
  </div>
@endif
