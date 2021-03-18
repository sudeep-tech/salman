
@if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert" id='hide'>
    <h5 class="alert-heading text-center">{{session('success')}}</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
    </div>
    @php
        Session::forget('success');
    @endphp
@endif
@if(session('warning'))
<div class="alert alert-warning alert-dismissible" role="alert" id='hide'>
    <h5 class="alert-heading text-center">{{session('warning')}}</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
    </div>
    @php
        Session::forget('warning');
    @endphp
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible" role="alert" id='hide'>
    <h5 class="alert-heading text-center">{{session('error')}}</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
    </div>
    @php
        Session::forget('error');
    @endphp
@endif
<script>
    setTimeout(function() {
        $('#hide').fadeOut('slow');
    }, 7000);
</script>