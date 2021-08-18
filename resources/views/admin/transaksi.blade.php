@extends('layouts.lucid')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-right"></i></a> Transaksi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                        href="#Home-withicon"><i class="fa fa-home"></i> Pending</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-withicon"><i
                                            class="fa fa-user"></i> Proses</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Contact-withicon"><i
                                            class="fa fa-vcard"></i> Selesai</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="Home-withicon">
                                    <h6>Home</h6>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                        stumptown
                                        aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles
                                        vegan
                                        helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                        banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                        Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div class="tab-pane" id="Profile-withicon">
                                    <h6>Profile</h6>
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                        organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                        pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                        hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                        pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel
                                        fixie
                                        etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them,
                                        vinyl
                                        craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                                <div class="tab-pane" id="Contact-withicon">
                                    <h6>Contact</h6>
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                        squid.
                                        Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                        artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress,
                                        commodo
                                        enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                        organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                                        salvia
                                        yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes
                                        anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson
                                        biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente
                                        accusamus tattooed echo park.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
