@extends('layouts.hesabim')

@section('content')

<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">




        <div class="row">
            <div class="col-md-12">

                <div class="row">

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">TOPLAM</h6>
                            <h2 class="m-b-20" data-plugin="counterup">10 </h2>
                            <!-- <span class="badge badge-custom"> +11% </span> <span class="text-muted">From previous period</span> -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-note float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">ONAYLANAN </h6>
                            <?php foreach ($onaylanan as $onayli): ?>
                              <h2 class="m-b-20"><span data-plugin="counterup">{{$onayli->onayli_not_sayisi}}</span></h2>
                            <?php endforeach; ?>
                            <h6 class="text-muted text-uppercase mt-0">YÜKLENEN </h6>
                            <?php foreach ($yuklenen as $yuklu): ?>
                              <h2 class="m-b-20" data-plugin="counterup">{{$yuklu->yuklu_not_sayisi}}</h2>
                            <?php endforeach; ?>
                            <!-- <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span> -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box tilebox-one">
                            <i class="icon-star float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">PUAN </h6>
                            <h2 class="m-b-20" data-plugin="counterup">0</h2>
                            <h6 class="text-muted text-uppercase mt-0">SATIŞ </h6>
                            <h2 class="m-b-20" data-plugin="counterup">0</h2>
                            <!-- <span class="badge badge-custom"> +89% </span> <span class="text-muted">Last year</span> -->
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->
                <?php foreach ($users as $user ): ?>


                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Bilgilerim</h4>
                    <div class="">
                        <div class="">
                            <h5 class="text-custom m-b-5">Ad,Soyad</h5>
                            <p class="m-b-0">{{$user->name}}</p>
                            <h5 class="text-custom m-b-5">E-posta</h5>
                            <p class="m-b-0">{{$user->email}}</p>
                            <h5 class="text-custom m-b-5">Cep Telefonu</h5>
                            <p class="m-b-0">{{$user->tel}}</p>

                        </div>

                        <hr>
                    </div>
                </div>

              <?php endforeach; ?>
                <div class="card-box">
                    <h4 class="header-title mb-3">Yüklediklerim Notlar</h4>

                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Ders Adı</th>
                                <th>Yıl</th>
                                <th>Sayfa Sayısı</th>
                                <th>Öğretim Üyesi</th>
                                <th>Fiyat</th>
                                <th>Durumu</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; ?>
                            <?php foreach ($notlarim as $not): ?>
                              <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$not->ders_adi}}</td>
                                  <td>{{$not->yil}}</td>
                                  <td>{{$not->sayfa_sayisi}}</td>
                                  <td>{{$not->ogretim_uyesi}}</td>
                                  <td>{{$not->fiyat}}</td>
                                  <td><?php if ($not->durum==1): ?>
                                    <?php echo "onaylandı"; ?>
                                    <?php else: ?>
                                      <?php echo "onaylanmadı"; ?>
                                  <?php endif; ?></td>
                              </tr>

                              <?php    $i++; ?>
                            <?php endforeach; ?>
                            <!-- <tr>
                                <td>2</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-success">Pending</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-pink">Done</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-purple">Work in Progress</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-warning">Coming soon</span></td>
                                <td>Coderthemes</td>
                            </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->

@endsection
