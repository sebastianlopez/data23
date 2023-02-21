<!-- SEO -->
<!-- <link href="{{asset('front/css/yosemodal.css')}}" rel="stylesheet" type="text/css"/> -->
<!-- <link href="{{asset('front/css/yosemodal.min.css')}}" rel="stylesheet" type="text/css"/>
<div id="divYoseMinContainer">

</div> -->

<div class="modal fade" 
    id="modalVideo" 
    tabindex="-1" 
    role="dialog"
    >
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-body">
                
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe 
                        id="modalVideoIframe" 
                        class="embed-responsive-item" 
                        src=""
                        frameborder="0" 
                        allowfullscreen
                        >
                    </iframe>
                </div>
            </div>        
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var myAutoplay = "?autoplay=1";
        var myControls = "&controls=1";
        var myDisablekb = "&disablekb=1";
        var myShowInfo = "&showinfo=0"
        var myRel = "?rel=0"
        var url = "https://www.youtube.com/embed/grLovpoDICs" + myRel;

        $("#modalVideo").on('hide.bs.modal', function() {
            $("#modalVideoIframe").attr('src', '');
        });
        $("#modalVideo").on('show.bs.modal', function() {
            $("#modalVideoIframe").attr('src', url);
        });   
    }); 
</script>

