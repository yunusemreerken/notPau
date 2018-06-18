@extends('layouts.hesabim')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Banka Bilgileri</h4>


                <form action="banka-ekle" method="post">
                  {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Ad(*)</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">TC(*)</label>
                            <input type="number" name="tc" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-9">
                            <label for="inputPassword4" class="col-form-label">IBAN
                            <input type="number" name="iban" class="form-control" id="inputPassword4" placeholder="Boşluk bırakmadan giriniz!">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->

</div> <!-- content -->
@endsection
