<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.js"></script>

  <style>
    body {
      padding-top: 70px;
    }
a:focus{
  outline:hidden;
  outline:0 auto -webkit-focus-ring-color;
  outline-offset:-2px
}
.img-responsive:hover {
    opacity: 0.75;
}
.navbar-brand {
    color: #00ACC1 !important;
}
.btn-primary {
    color: #FFF;
    background-color: #00ACC1;
    border-color: #0097A7;
}
.btn-primary:hover {
    color: #FFF;
    background-color: #0097A7;
    border-color: #0097A7;
}
.ekko-lightbox-container {
  position: relative;
}

.ekko-lightbox-nav-overlay {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100%;
  height: 100%;
}

.ekko-lightbox-nav-overlay a {
  z-index: 100;
  display: block;
  width: 49%;
  height: 100%;
  font-size: 30px;
  color: #fff;
  text-shadow: 2px 2px 4px #000;
  opacity: 0;
}

.ekko-lightbox-nav-overlay a:empty {
  width: 49%;
}

.ekko-lightbox a:hover {
  text-decoration: none;
  opacity: 1;

}

.ekko-lightbox .glyphicon-chevron-left {
  left: 0;
  float: left;
  padding-left: 15px;
  text-align: left;
}

.ekko-lightbox .glyphicon-chevron-right {
  right: 0;
  float: right;
  padding-right: 15px;
  text-align: right;
}

.ekko-lightbox .modal-footer {
  text-align: left;
}
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/member">JPC 11 Registration System</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="/member/logout"><i class=" glyphicon glyphicon-log-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal">
              <?php foreach($data->result() as $row){ ?>

              <div class="form-group">
              <label class="col-sm-4 control-label">ชื่อ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->fname;?> <?php echo $row->lname;?> (<?php echo $row->nickname;?>)</p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">เพศ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->gender;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">อายุ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->age;?> (<?php echo $row->lname;?>)</p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ศาสนา</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->religion;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">สัญชาติ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->nationality;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">น้ำหนัก</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->weight;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ส่วนสูง</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->height;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">หมายเลขโทรศัพท์มือถือ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->tel;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">หมายเลขโทรศัพท์ผู้ปกครอง บิดา</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->dad_tel;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">หมายเลขโทรศัพท์ู้ปกครอง มารดา</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->mom_tel;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">โรคประจำตัว</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->disease;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">สิ่งที่แพ้</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->allergy;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ที่อยู่</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->address;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->email;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Facebook</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><a href="<?php echo $row->facebook;?>" target="_blank"><?php echo $row->facebook;?></a></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Line</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->line;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ระดับชั้น</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->class;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">เกรดเฉลี่ย</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->grade;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">โรงเรียน</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->school;?> (<?php echo $row->plan;?>)</p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Programming Language ที่สนใจ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->plang;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">คณะ/มหาวิทยาลัยที่ใฝ่ฝัน</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->university;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ค่ายที่เคยเข้าร่วม</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->camp;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">รางวัลที่เคยได้รับ</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->award;?></p>

                </div>
              </div>
              <hr>
              <div class="form-group">
              <label class="col-sm-4 control-label">1.) ถ้าน้องเจอกับแม่มดกลางป่าตามลำพังและมีอาวุธเพียงหนึ่งชิ้นเพื่อใช้ป้องกันตัว น้องจะเลือกอาวุธชิ้นไหนและเพราะอะไรน้องถึงเลือกอาวุธชิ้นนั้น  [ดาบ, ไม้กายสิทธิ์, ปืน, ธนู, มีดพก, กระจก]</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q1;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">2.) จงแต่งเรื่องโดยเลือกใช้เพียง 7 คำจากคำทั้งหมดต่อไปนี้  [โปรแกรมเมอร์, ค่าย JPC, ไอฟาย, เกรียนหัวเขียว, มะพร้าวแก้ว, โคตรมันส์, โดดเลยดีออก, problem?, แคปหมู, ไอโฟน]</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q2;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">3.) ถ้าหากน้องได้กลายเป็นโปรแกรมเมอร์ น้องอยากจะสร้างหรือพัฒนาโปรแกรมอะไรและเพราะอะไร?</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q3;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">4.) นักโทษตาบอดเข้ารับการทดสอบก่อนโดนประหาร โดยได้รับยามา 4 เม็ด เป็นสีดำ 2 และสีขาว 2 เม็ด ถ้าเขาสามารถกินยาสีดำ 1 เม็ดและสีขาว 1 เม็ดได้เขาจะได้รับการอภัยโทษ ถ้าน้องเป็นนักโทษคนนั้นจะทำอย่างไร ?</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q4;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">5.) ระหว่างภาษา C++ และ Java น้องคิดว่ามีอะไรที่คล้ายคลึงกัน</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q5;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">6.) ให้น้อง ๆ หาค่า n ของ code ต่อไปนี้  “กำหนดให้ c มีค่า 250 และค่าของ n คือ (c/10)%10*10" </label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q6;?></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">7.) น้องคาดหวังอะไรจากค่ายนี้ </label>
                <div class="col-sm-8">
                  <p class="form-control-static"><?php echo $row->q7;?></p>

                </div>
              </div>
             
              <div class="form-group">
              <label class="col-sm-4 control-label">รูปถ่าย</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><a class="btn btn-primary btn-md" href="<?php echo $file[0];?>">View</a></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ป.พ.1</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><a class="btn btn-primary btn-md" href="<?php echo $file[1];?>">View</a></p>

                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">ใบรับรองความเป็นนักเรียน</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><a  class="btn btn-primary btn-md" href="<?php echo $file[2];?>">View</a></p>

                </div>
              </div>


              <div class="row">
                <a href="<?php echo $file[0];?>" data-toggle="lightbox" data-gallery="multiimages" data-title="รูปถ่ายชุดนักเรียน" class="col-sm-4">
                  <img src="<?php echo $file[0];?>" class="img-responsive">
                </a>
                <a href="<?php echo $file[1];?>" data-toggle="lightbox" data-gallery="multiimages" data-title="ป.พ.1" class="col-sm-4">
                  <img src="<?php echo $file[1];?>" class="img-responsive">
                </a>
                <a href="<?php echo $file[2];?>" data-toggle="lightbox" data-gallery="multiimages" data-title="ใบรับรองความเป้นนักเรียน" class="col-sm-4">
                   <img src="<?php echo $file[2];?>" class="img-responsive">
                </a>
             </div>

              <?php }?>


            </form>

          </div>
        </div>

      </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.js"></script>

            <script type="text/javascript">
           
      $(document).ready(function ($) {

        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
          event.preventDefault();
          return $(this).ekkoLightbox({
            onShown: function() {
              if (window.console) {
                return console.log('Checking our the events huh?');
              }
            },
            onNavigate: function(direction, itemIndex) {
              if (window.console) {
                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
              }
            }
          });
        });

        //Programatically call
        $('#open-image').click(function (e) {
          e.preventDefault();
          $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
          e.preventDefault();
          $(this).ekkoLightbox();
        });

        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
          event.preventDefault();
          return $(this).ekkoLightbox({
            onShown: function() {
              var a = this.modal_content.find('.modal-footer a');
              if(a.length > 0) {
                a.click(function(e) {
                  e.preventDefault();
                  this.navigateTo(2);
                }.bind(this));
              }
            }
          });
        });

      });
    
        </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
  </html>
