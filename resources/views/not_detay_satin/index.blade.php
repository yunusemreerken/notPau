@section('head')
<!--venobox lightbox-->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/magnific-popup/css/magnific-popup.css')}}"/>
<style media="screen">
  .deneme{
    opacity: 1;
  }
</style>
@endsection

@section('footer')
<script type="text/javascript" src="{{URL::asset('admin/plugins/isotope/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });
    $(document).ready(function() {
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
</script>
@endsection
@extends('layouts.hesabim')

@section('content')
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

      <!-- SECTION FILTER
      ================================================== -->
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 ">
              <div class="portfolioFilter text-center gallery-second">



              </div>
          </div>
      </div>

      <div class="port">
          <div class="portfolioContainer">

            <?php foreach ($not_info as $not): ?>
              <div class="col-sm-6 col-md-4 webdesign">
                  <a href="{{URL::asset('/images/'.$not->filename)}}" class="image-popup">
                      <div class="portfolio-masonry-box">
                          <div class="portfolio-masonry-img">
                              <img src="{{URL::asset('/images/'.$not->filename)}}" class="deneme thumb-img img-fluid" alt="work-thumbnail">
                          </div>
                          <!-- <div class="portfolio-masonry-detail">
                              <h4 class="font-18">Street Photography</h4>
                              <p>Graphic Design</p>
                          </div> -->
                      </div>
                  </a>
              </div>
            <?php endforeach; ?>

          </div>
      </div> <!-- End row -->

      <div class="row">
          <div class="col-12">
              <div class="card-box">
                  <!-- <h4 class="m-t-0 header-title">Not Ara</h4> -->
                  <p class="text-muted m-b-30 font-13">
                      <!-- include filtering in your FooTable. -->
                  </p>


                  <table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                      <thead>
                      <tr>
                          <th data-toggle="true">Ders Adı</th>
                          <th>Üniversite</th>
                          <th data-hide="phone">Yıl</th>
                          <th data-hide="phone">Fiyat</th>
                          <th data-hide="phone">Paylaşan</th>
                          <th data-hide="phone">Sayfa Sayısı</th>



                          <!-- <th data-hide="phone, tablet">Status</th> -->
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                    <?php foreach ($not_info as $not): ?>
                      <tr>
                          <td>{{$not->ders_adi}}</td>
                          <td>{{$not->universite}}</td>
                          <td>{{$not->yil}}</td>
                          <td>{{$not->fiyat}}</td>
                          <td><span class="badge label-table badge-success">{{$not->user_name}}</span></td>
                          <td>{{$not->sayfa_sayisi}}</td>
                          

                      </tr>
                      <?php if ($i==1): ?>
                        <?php break; ?>

                      <?php endif; ?>
                    <?php endforeach; ?>
                      <!-- <tr>
                          <td>Shona</td>
                          <td>Woldt</td>
                          <td>Airline Transport Pilot</td>
                          <td>3 Oct 1981</td>
                          <td><span class="badge label-table badge-custom">Disabled</span></td>
                          <td>sdsd</td>

                      </tr>
                      <tr>
                          <td>Granville</td>
                          <td>Leonardo</td>
                          <td>Business Services </td>
                          <td>19 Apr 1969</td>
                          <td><span class="badge label-table badge-danger">Suspended</span></td>
                          <td>sdsd</td>

                      </tr> -->

                      </tbody>
                      <!-- <tfoot>
                      <tr class="active">
                          <td colspan="6">
                              <div class="text-right">
                                  <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0"></ul>
                              </div>
                          </td>
                      </tr>
                      </tfoot> -->
                  </table>
              </div>
          </div>
      </div>
    </div> <!-- container -->

</div> <!-- content -->

@endsection
