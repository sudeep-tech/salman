
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
    }, 5000);
</script>

<!-- Added From Shopmart -->
<!-- 
<div id="div1" class="infomes">
    <div class="message-box-wrap">
        <button class="close-but" id="colosebut1">close</button>
        This is an <strong>Information</strong> Message!
    </div>
</div>
<div class="margin-bottom"></div>

<div id="div2" class="successmes">
    <div class="message-box-wrap">
        <button class="close-but" id="colosebut2">close</button>
        This is an <strong>Success</strong> Message!
    </div>
</div>
<div class="margin-bottom"></div>

<div id="div3" class="noticemes">
    <div class="message-box-wrap">
        <button class="close-but" id="colosebut3">close</button>
        This is an <strong>Notice</strong> Message!
    </div>
</div>
<div class="margin-bottom"></div>

<div id="div4" class="errormes">
    <div class="message-box-wrap">
        <button class="close-but" id="colosebut4">close</button>
        This is an <strong>Error</strong> Message!
    </div>
</div>
<div class="margin-bottom"></div> -->

<!-- End Added from shopmart -->