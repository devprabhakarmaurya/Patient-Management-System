<?php $this->load->view('website/header'); ?>
        <!-- Page Content Start -->
        <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?=base_url();?>assets/dist/img/slide1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="<?=base_url();?>assets/dist/img/slide3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="<?=base_url();?>assets/dist/img/slide2.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>


        <div class="page-section ">
            <div class="container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 py-3">
                        <h1>Welcome To The Hospital</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, nam laudantium nemo officia nobis esse, enim unde vero et dolorum facilis voluptas aliquid illo perferendis veniam! Impedit unde quas consequatur provident saepe eveniet facilis odit deserunt tempora quibusdam similique facere, voluptatem nemo, culpa velit magnam nulla ratione ipsum, harum libero accusantium aperiam voluptate. Eius minus cupiditate dolore veritatis. Dolore dolorem perferendis unde! Earum dolor odio quia aut, labore aperiam. Cum nobis cupiditate ut fugit voluptatum, cumque nisi! Voluptate perferendis, unde modi tempore aliquid, animi labore sequi esse vel omnis error laborum ratione doloribus quia cumque porro suscipit molestiae delectus ex.</p>
                        <a class="btn btn-primary">More</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?=base_url();?>assets/dist/img/doctor.jpg" alt="" style="height:80%; width:80%;">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Page Content End -->
        <?php $this->load->view('website/footer'); ?>       