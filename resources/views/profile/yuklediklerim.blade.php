@extends('layouts.hesabim')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th data-priority="1">No</th>
                                    <th data-priority="3">Notun Adı</th>
                                    <th data-priority="1">Durumu</th>
                                    <th data-priority="3">Fiyat</th>
                                    <th data-priority="3">Satış Sayısı</th>
                                    <th data-priority="6">Tarih</th>
                                    <!-- <th data-priority="6">Ask</th>
                                    <th data-priority="6">1y Target Est</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                    <!-- <td>597.91 x 300</td>
                                    <td>731.10</td> -->
                                </tr>
                                <tr>
                                      <!-- <th>AAPL <span class="co-name">Apple Inc.</span></th> -->
                                    <td>378.94</td>
                                    <td>12:22PM</td>
                                    <td>5.74 (1.54%)</td>
                                    <td>373.20</td>
                                    <td>381.02</td>
                                    <td>378.92 x 300</td>
                                    <!-- <td>378.99 x 100</td>
                                    <td>505.94</td> -->
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->
@endsection
