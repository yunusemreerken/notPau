@extends('layouts.adminMaster')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Kişisel Bilgiler</h4>


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">İsim</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Soyisim</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Doğum Günü</label>
                          <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState" class="col-form-label">Cinsiyet</label>
                        <select id="inputState" class="form-control">Choose</select>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity" class="col-form-label">Cinsiyet</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Hakkımda</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->

</div> <!-- content -->
@endsection
