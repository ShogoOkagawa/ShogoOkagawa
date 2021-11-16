@if (session('flash_message'))
  <div class="fixed-top mt-5 container">
    <div class="alert alert-dismissable fade show my-3">
      {{ sesion('flash-message') }}
      <button class="close" data-dismiss="alert">✖️</button>
    </div>
  </div>
@endif
