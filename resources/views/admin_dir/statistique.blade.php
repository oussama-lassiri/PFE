@extends('admin_dir.theme')

@section('page','Statistique ')

@section('right content')

    <div class="row">
        <div class="col-xl-8">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title mb-4">Graphique à aires </h4>

                    <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Graphique circulaire</h4>

                    <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row" >

        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Statistiques des annonces</h4>
                    <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                </div>
            </div>

        </div>
    </div>



@endsection

@section('JS')

@endsection
