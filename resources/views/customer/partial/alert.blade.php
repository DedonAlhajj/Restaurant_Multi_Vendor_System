

  @if($errors->any() || session('error'))
  <div class="alert alert-danger solid alert-dismissible fade show">
      <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
      
        <strong>Error!</strong>{{ session('error') }}
          @foreach ($errors->all() as $error)
              <strong>{{ $error }}</strong>
          @endforeach
    
      <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
          <i class="fa-solid fa-xmark"></i>
      </button>
  </div>
  @endif



  @if (session('success'))
  <div class="alert alert-success solid alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
    <strong>Success!</strong> {{ session('success') }}.
    <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        <i class="fa-solid fa-xmark"></i>
    </button>
    </div>
  @endif


  @if( session('info'))
  <div class="alert alert-info solid alert-dismissible fade show">
      <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
      <strong> info! </strong>{{ session('info') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
          <i class="fa-solid fa-xmark"></i>
      </button>
  </div>
  @endif

  <div class="alert alert-info solid alert-dismissible fade show" style="display:none" >
      <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
      <strong> info! </strong> <span id="info_message"></span>
      <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
          <i class="fa-solid fa-xmark"></i>
      </button>
  </div>


  <div class="alert alert-success solid alert-dismissible fade show" style="display:none" >
    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
    <strong> info! </strong> <span id="success_message"></span>
    <button class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        <i class="fa-solid fa-xmark"></i>
    </button>
</div>

