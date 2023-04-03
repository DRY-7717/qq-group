@extends('template.main')
@section('content')
<section class="section-store">
    <img src="/img/pubg-thumbnail.png" alt="">
</section>

<section class="bg-white pb-3 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 p-4 text-center d-block">
                <p>Share</p>
                <img src="/img/dynamiclink.png" alt="" width="30" class="mb-2 d-lg-block mx-auto">
                <img src="/img/twitter.png" alt="" width="30" class="mb-2 d-lg-block mx-auto">
                <img src="/img/facebook.png" alt="" width="30" class="mb-2 d-lg-block mx-auto">
                <img src="/img/instagram.png" alt="" width="30" class="mb-2 d-lg-block mx-auto">
                <img src="/img/whatsapp.png" alt="" width="25" class="mb-2 d-lg-block mx-auto">

            </div>
            <div class="col-lg-6 p-4">
                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="text-danger"><img src="/img/flashsale.png" alt=""> Flashsale</h5>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border-store-1">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <h5 class="text-dark">Regular</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="box-store border border-dark">
                            <p class="mb-0">120 + 50 Diamond</p>
                            <p class="text-danger mb-0">IDR 25.000</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 p-4 ">
                <form action="">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h5 class="fw-semibold">Masukkan Game ID Mobile Legends Anda</h5>
                            <small class="mb-2 d-block">Contoh: 234567841</small>
                            <input type="text" class="input-store border-store-1 form-control"
                                placeholder="Silahkan masukan ID Anda">
                        </div>
                        <div class="col-lg-12">
                            <h5 class="fw-semibold">Pilih Metode Pembayaran</h5>
                            <p class="mb-2 d-block">Voucher</p>
                            <div class="input-group mb-3 input-group-store">
                                <span class="input-group-text bg-white" id="inputGroup-sizing-default"><img
                                        src="/img/ticket.png" alt=""></span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    placeholder="Masukkan Kode Voucher Anda">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn-store me-1"><img src="/img/gopay.png" alt=""></button>
                                    <button class="btn-store btn-qris mx-2"><img src="/img/qris.png" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




@endsection