<br><br><br><br><br>
<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="text-center"><?= $rowbaidang['tensp'] ?></h2>
                    <img src="views/images/line-dec.png" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section" id="our-classes">
    <div class="big-container">
        <div class="row">
            <div class="card col-md-9 rounded-0 bg-transparent border-0" style="margin-top: -100px;">
                <div class="card-body p-0 mt-4 text-dark">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh2'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh3'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh4'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="..." >
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh5'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item mt-bannerbaidang">
                                <img src="../upload/<?= $rowbaidang['hinh6'] ?>" onerror="this.src = '../upload/noimg.jpg';" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 rounded-0 border-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white font-weight-bold">TH??NG TIN</li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Danh m???c:</span> <?= getTenDanhMuc($rowbaidang['iddm']) ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Khu v???c:</span> <?= getTenKhuVuc($rowbaidang['idkhuvuc']); ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">N???i th???t:</span> <?= $rowbaidang['noithat'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Ph??ng ng???:</span> <?= $rowbaidang['phongngu'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Di???n t??ch:</span class="text-danger"> <?= $rowbaidang['dientich'] ?> m<sup>2</sup></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Gi??:</span> <?= number_format($rowbaidang['gia'], 0, ",", "."); ?><sup>VND</sup><?php if (strlen(strstr(strtolower($rowbaidang['tensp']), "cho thu??")) > 0) echo '/ Th??ng';
                                                                                                                        else echo '/M<sup>2</sup>'; ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Ng?????i ????ng:</span class="text-danger"> <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten']; ?></li>

                </ul>
                <div class="divider">
                    <br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white font-weight-bold">LI??N H??? NG?????I ????NG</li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">S??? ??i???n tho???i:</span> +84<?= getNameNguoiDung($rowbaidang['idnguoiban'])['sodienthoai'] ?></li>
                    <li class="list-group-item"><span class="text-secondary font-weight-bold">Email:</span> <?= getNameNguoiDung($rowbaidang['idnguoiban'])['email'] ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="card col-md-6 rounded-0 border-0 thongtinmota">
                <h2>TH??NG TIN M?? T???</h2>
                <h5>V??? tr??:</h5>
                <p class="card-text"><?= $rowbaidang['mota'] ?></p>
                <h5>H??? t???ng:</h5>
                <p>V???i ti???n ??ch n???i khu ?????t chu???n qu???c t??? c??ng nhi???u khu ch???c n??ng ??a d???ng, cao c???p, The Sun Avenue s??? l?? ??i???m nh???n cho ph??n kh??c c??n h??? cao c???p t???i <?= getTenKhuVuc($rowbaidang['idkhuvuc']); ?> trong th???i gian s???p t???i.</p>
                <h5>Th??ng tin:</h5>
                <p>Ph??ng ng???:</span> <?= $rowbaidang['phongngu'] ?></p>
                <p>Di???n t??ch:</span class="text-danger"> <?= $rowbaidang['dientich'] ?> m<sup>2</sup></p>
                <p>N???i th???t:</span class="text-danger"> <?= $rowbaidang['noithat'] ?>, r??m, m??y l???nh, m??y gi???c</p>
                <p>Gi?? thu??:</span> <?= number_format($rowbaidang['gia'], 0, ",", "."); ?><sup>VND</sup><?php if (strlen(strstr(strtolower($rowbaidang['tensp']), "cho thu??")) > 0) echo '/ Th??ng';
                                                                                                                        else echo '/m <sup>2</sup>'; ?></p>
            </div>
            <div class="card col-md-6 rounded-0 border-0">
                <h2>TH??NG TIN B???N ?????</h2>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4549694901184!2d106.62692827837184!3d10.852958680974394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1606040054486!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
            </div>
        </div>


    </div>
    <div class="big-container mt-4">
        <div class="auth">
            <span class="auth-child">T??c gi???: <?= getNameNguoiDung($rowbaidang['idnguoiban'])['hoten']; ?> | Th???i gian ????ng: 14h02 11/11/2020</span>
        </div>
    </div>
</section>
<br>