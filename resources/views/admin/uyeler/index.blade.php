
@extends('layouts.admin')

@section('content')
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

      <div class="row">
          <div class="col-12">
              <div class="card-box">
                  <h4 class="m-t-0 header-title">Kullanıcılar</h4>
                  <p class="text-muted m-b-30 font-13">
                      <!-- include filtering in your FooTable. -->
                  </p>

                  <div class="mb-3">
                      <div class="row">
                          <div class="col-12 text-sm-center form-inline">
                              <div class="form-group mr-2">
                                  <!-- <select id="demo-foo-filter-status" class="custom-select">
                                      <option value="">Show all</option>
                                      <option value="active">Active</option>
                                      <option value="disabled">Disabled</option>
                                      <option value="suspended">Suspended</option>
                                  </select> -->
                              </div>

                              <form class="" action="kullanici-ara" method="post">
                                @csrf
                                <input type="text" name="kullanici" value="" required placeholder="örnek:email,ad,tel" style="width:350px">
                                <button type="submit" class="btn btn-default" name="button"><i class="fa fa-search" aria-hidden="true"></i>Ara</button>
                              </form>
                          </div>
                      </div>
                  </div>
                  <table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                      <thead>
                      <tr>
                          <th data-toggle="true">Ad</th>
                          <th>Email</th>
                          <th data-hide="phone">Cinsiyet</th>
                          <th data-hide="phone">Tel</th>
                          <th data-hide="phone">admin</th>



                          <!-- <th data-hide="phone, tablet">Status</th> -->
                      </tr>
                      </thead>
                      <tbody>
                    <?php foreach ($users as $user): ?>
                      <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td><?php if ($user->cinsiyet=='erkek'): ?>
                            <?php echo "erkek"; ?>
                            <?php else: ?>
                              <?php echo "kadın"; ?>
                          <?php endif; ?></td>
                          <td>{{$user->tel}}</td>
                          <td>
                            <form class="" action="user-durum" method="post">
                              @csrf
                            <?php if ($user->is_admin==0): ?>
                              <input type="hidden" name="user_id" value="{{$user->id}}">
                              <input type="hidden" name="is_admin" value="1">
                              <input class="btn btn-success" type="submit" name="" value="Aktif">
                              <?php else: ?>
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input type="hidden" name="is_admin" value="0">
                                <input class="btn btn-danger" type="submit" name="" value="Pasif">

                            <?php endif; ?>
                          </form>
                          </td>

                      </tr>
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
                      <tfoot>
                      <tr class="active">
                          <td colspan="6">
                              <div class="text-right">
                                  <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10 m-b-0"></ul>
                              </div>
                          </td>
                      </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>

    </div> <!-- container -->

</div> <!-- content -->

@endsection
