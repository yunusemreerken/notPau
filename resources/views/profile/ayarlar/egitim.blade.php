@extends('layouts.adminMaster')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Üniversite</h4>


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Üniversite*</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Fakülte*</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Bölüm*</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Derece*</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Başlangıç Tarihi</label>
                          <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Bitiş Tarihi</label>
                          <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Mezuniyet Durumu</label>
                            <input type="checkbox" id="inputCity">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Güncelle</button>
                </form>
                <hr>
                <h4 class="m-t-0 header-title">Lise</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Lise*</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">Mezuniyet Durumu</label>
                            <input type="checkbox"  id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Başlangıç Tarihi</label>
                          <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Bitiş Tarihi</label>
                          <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
