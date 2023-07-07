@extends('layouts.user')
@section('css')
@endsection
@section('main')
<div class="c-layout-page">
   <!-- BEGIN: PAGE CONTENT -->
   <div class="m-t-20 visible-sm visible-xs"></div>
   <center style="max-width:1140px; margin: 0 auto;" class="hidden-xs">
      <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url('{{asset('site/img/unknown-cover.jpg')}}');background-position: center;width:100%;height: 350px;background-repeat: no-repeat;background-position: center;background-size: cover;">
         <div class="container">
            <div class="c-page-title c-pull-left">
               <h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">&nbsp;</h3>
            </div>
         </div>
      </div>
   </center>
   <div class="container c-size-md ">
      <div class="col-md-12">
         <div class="text-center" style="margin-top: -128px;">
            <center>
               <img class="img-responsive img-thumbnail hidden-xs" width="256" height="256" src="{{asset('site/img/unknown-avatar.jpg')}}" alt="png-image">
               <h2 class="c-font-bold c-font-28">ID Web: 532652</h2>
               <h2 class="c-font-bold c-font-28">
                  hieutan
               </h2>
               <h2 class="c-font-22">Thành viên</h2>
               <h2 class="c-font-22">truongngoctanhieu2018@gmail.com</h2>
               <h2 class="c-font-22 c-font-red">0đ</h2>
            </center>
         </div>
      </div>
   </div>
   <div class="c-layout-page" style="margin-top: 20px;">
      <div class="container">
         <div class="c-layout-sidebar-menu c-theme ">
            <div class="row">
               <div class="col-md-12 col-sm-6 col-xs-6 m-t-15 m-b-20">
                  <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                  <div class="c-content-title-3 c-title-md c-theme-border">
                     <h3 class="c-left c-font-uppercase">Menu tài khoản</h3>
                     <div class="c-line c-dot c-dot-left "></div>
                  </div>
                  <div class="c-content-ver-nav">
                     <ul class="c-menu c-arrow-dot c-square c-theme">
                        <li><a href="/user/profile" class="active">Thông tin tài khoản</a></li>
                        <li><a href="/user/inbox" class="p-quantity ">Hộp thư
                           <span id="quantity_noti" class="quantity">0</span>
                           </a>
                        </li>
                        <li><a href="/user/tran-log" class="">Lịch sử giao dịch </a></li>
                        <li>
                           <a data-toggle="collapse" data-parent="#accordion1" class="cmenu-parrent collapsed" href="#menuchild_roll">Lịch sử vòng quay (0)</a>
                           <ul id="menuchild_roll" class="children collapse">
                           </ul>
                        </li>
                        <li><a href="/user/withdrawruby/1" class="">Rút quà mở rương (8)</a></li>
                        <li><a href="/user/bank" class="">Tài khoản ngân hàng</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 col-sm-6 col-xs-6 m-t-15">
                  <div class="c-content-title-3 c-title-md c-theme-border">
                     <h3 class="c-left c-font-uppercase">Menu giao dịch</h3>
                     <div class="c-line c-dot c-dot-left "></div>
                  </div>
                  <div class="c-content-ver-nav m-b-20">
                     <ul class="c-menu c-arrow-dot c-square c-theme">
                        <li><a href="/nap-the" class=""><b>Nạp thẻ tự động</b></a></li>
                        <li><a href="/deposit-history" class="">Lịch sử nạp thẻ</a></li>
                        <li><a href="/recharge" class="">Nạp Ví / ATM tự động</a></li>
                        <li><a href="/tran/acc" class="">Tài khoản đã mua</a></li>
                        <li><a href="/tran/acc-hire-purchase" class="">Tài khoản trả góp</a></li>
                        <li><a href="/dich-vu/log" class="">Dịch vụ đã mua</a></li>
                        <li><a href="/log-phu-kien" class="">Lịch sử mua phụ kiện</a></li>
                        <li><a href="/mua-the/log" class="">Thẻ cào đã mua</a></li>
                        <li><a href="/user/tranfer" class="">Chuyển tiền</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="c-layout-sidebar-content ">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
            <div class="c-content-title-1">
               <h3 class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
               <div class="c-line-left"></div>
            </div>
            <table class="table table-striped">
               <tbody>
                  <tr>
                     <th scope="row">ID của bạn:</th>
                     <th><span class="c-font-uppercase">532652</span></th>
                  </tr>
                  <tr>
                     <th scope="row">Tên tài khoản:</th>
                     <th>hieutan</th>
                  </tr>
                  <tr>
                     <th scope="row">Số dư tài khoản:</th>
                     <td><b class="text-danger">0đ</b></td>
                  </tr>
                  <!--                <tr>
                     <th scope="row">Địa chỉ Email:</th>
                     <td>Tanmk1191@gmail.com (<a href="/user/email.html">Cài đặt</a>)</td>
                     </tr>-->
                  <tr>
                     <th scope="row">Bảo mật ODP:</th>
                     <td><a href="/user/phone.html"><b><i class="text-danger">Thêm số điện thoại</i></b></a></td>
                  </tr>
                  <tr>
                     <th scope="row">Nhóm tài khoản:</th>
                     <td>Thành viên</td>
                  </tr>
                  <tr>
                     <th scope="row">Ngày tham gia:</th>
                     <td>
                        12/05/2022
                     </td>
                  </tr>
                  <tr>
                     <th scope="row">Mật khẩu:</th>
                     <td><a href="/user/change-password"><b><i class="text-danger">****** (Đổi mật khẩu)</i></b></a></td>
                  </tr>
               </tbody>
            </table>
            <!-- END: PAGE CONTENT -->
         </div>
      </div>
   </div>
   <!-- END: PAGE CONTENT -->
</div>
@endsection
@section('js')
@endsection