
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        {foreach $slides as $slide}
            <div class="carousel-item" data-interval="5000">
                <img src="../../../media/slides/{$slide->getImage()}" class="d-block w-100" alt="{$slide->getDescription()}">
            </div>
        {/foreach}
{*                <img src="{#mediaUrl#}/slides/{$slide->getImage()}" alt="{$slide->getDescription()}" class="d-block w-100">*}
{*        <div class="carousel-item active">*}
{*            <img src="../../../media/slides/float-camera%20miracle_0.jpg" class="d-block w-100" alt="miracle_0">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_1.jpg" class="d-block w-100" alt="miracle_1">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_2.jpg" class="d-block w-100" alt="miracle_2">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_3.jpg" class="d-block w-100" alt="miracle_3">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_4.jpg" class="d-block w-100" alt="miracle_4">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_5.jpg" class="d-block w-100" alt="miracle_5">*}
{*        </div>*}
{*        <div class="carousel-item active">*}
{*            <img src="../../../media/slides/float-camera%20miracle_6.jpg" class="d-block w-100" alt="miracle_6">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_8.jpg" class="d-block w-100" alt="miracle_7">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_9.jpg" class="d-block w-100" alt="miracle_8">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_10.jpg" class="d-block w-100" alt="miracle_9">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_11.jpg" class="d-block w-100" alt="miracle_10">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_12.jpg" class="d-block w-100" alt="miracle_11">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_14.jpg" class="d-block w-100" alt="miracle_12">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_16.jpg" class="d-block w-100" alt="miracle_13">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_17.jpg" class="d-block w-100" alt="miracle_14">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_20.jpg" class="d-block w-100" alt="miracle_15">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_23.jpg" class="d-block w-100" alt="miracle_17">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_24.jpg" class="d-block w-100" alt="miracle_18">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_25.jpg" class="d-block w-100" alt="miracle_19">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_27.jpg" class="d-block w-100" alt="miracle_21">*}
{*        </div>*}
{*        <div class="carousel-item">*}
{*            <img src="../../../media/slides/float-camera%20miracle_28.jpg" class="d-block w-100" alt="miracle_22">*}
{*        </div>*}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<script>
    $('.carousel-inner .carousel-item:first').addClass('active');
</script>







{literal}
<!--
<script type="text/javascript">
    $(function(){
        $("#slides").slidesjs({
            width: 700,
            height: 397,
            navigation: {active: false},
            pagination: {active: false},
            play: {active: false, auto: true, interval: 3000, effect: 'fade'},
            effect: {
                fade: {speed: 1000, crossfade: true}
            }
        });
    });
</script>
-->
{/literal}
