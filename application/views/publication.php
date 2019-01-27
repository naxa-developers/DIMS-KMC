<?php $pub_cat_nep='  <option value=0>सबै</option>
 <option value="muni_pub">नगरपालिकाको प्रकाशनहरु</option>
 <option value="law_act">नियम कानुनहरु</option>
 <option value="plan_politics">योजनाहरु तथा नीतिहरु</option>
 <option value="others">अन्य</option>';

$pub_cat_en='<option value=0>ALL</option>
 <option value="muni_pub">Municipal Publications</option>
 <option value="law_act">Laws and Acts</option>
 <option value="plan_politics">Plans and Policies</option>
 <option value="others">Others</option>';
?>

    <section class="searchpanel">
        <div class="container">
            <div class="search flex contactSearch">
                <div class="inputholder grow">
                    <label for=""><?php echo !empty(SEARCH)?SEARCH:'' ?></label>
                    <input class="search--input " id="myInput" placeholder="Enter to search..." type="text" onkeyup="myFunction()">
                </div>
                <div class="selectHolder">
                    <label for="pub_cat"><?php echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat">
                    <?php if ($pub_lang=='en') {
                        echo $pub_cat_en;
                      }else {
                      echo $pub_cat_nep;
                      } ?>
                    </select>
                </div>
                <!-- <div class="selectHolder">
                    <label for="">Category</label>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div> -->

                <button class="btn-primary search--btn"><?php echo !empty(SEARCH)?SEARCH:'' ?></button>
            </div>
        </div>
    </section>
    <section class="section-padding-half">
        <div class="container">
            <h4>Documents</h4>
            <div class="row" id="filter_pub">
                <?php if($data):
                foreach($data as $d ){ ?>
                <div class="col-md-6 ">
                    <div class="doccontent flex ">
                        <div class="docImg">
                            <img src="<?php echo base_url()?>/uploads/publication/28.png" alt="<?php echo $d['title']?>">
                        </div>
                        <div class="docdetailwrp  grow">
                          <div class="docTitle" id="<?php echo $d['id'] ?>">
                               <?php echo $d['title']?>
                            </div>
                            <div class="doctype">
                                Type:Book
                            </div>
                            <p class="docDetail">
                               <?php echo $d['summary'] ?>
                            </p>
                            <div class="docFooter flex justify-content-between">
                                <div class="doccount">
                                    123 downloads
                                </div>
                                <div class="docsize">
                                    345
                                   <!--  <a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title=<?php echo $d['title']?>" class="btn btn-primary btn-block"><?php echo !empty(DOWNLOAD)?DOWNLOAD:'' ?> <i class="la la-download"></i></a> -->
                                   <i class="fa fa-download"></i>
                                </div>
                                <button class="btnsmp"> View All
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            <?php } endif; ?>
            </div>
        </div>
    </section>
<!-- <div class="container" >
	
  <div class="mt-2 pt-4 pb-4">
    <div class="row">
      <div class="col-md-6">
        <label for="pub_cat"><strong><?php echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></strong></label>
      </div>
      <div class="col-md-6">
        <label for="myInput"><strong><?php echo !empty(SEARCH?SEARCH:'') ?></strong></label>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <select class="form-control" id="pub_cat">

          <?php if ($pub_lang=='en') {
            echo $pub_cat_en;
          }else {
          echo $pub_cat_nep;
          } ?>

        </select>
      </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <input  class="form-control" id="myInput" onkeyup="myFunction()">
      </div>
      </div>
    </div>
  </div>
 -->





<!-- 

<div class="row justify-content-center mb-4 pb-3" id="filter_pub">


    <?php foreach($data as $d ){ ?>
       <div class="col-md-4 col-xl-3">
          <div class="publication-item padding bg-white" data-mh="publication">
            <div class="thumb"><img src="<?php echo $d['photo']?>" ></div>
            <h6 class="name" id="<?php echo $d['id'] ?>"><?php echo $d['title']?></h6>
            <p><?php echo $d['summary']?></p>
            <a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title=<?php echo $d['title']?>" class="btn btn-primary btn-block"><?php echo !empty(DOWNLOAD)?DOWNLOAD:'' ?> <i class="la la-download"></i></a>
          </div>
        </div>

  <?php } ?>


</div>
</div> -->


<script type="text/javascript">
// $(document).ready( function() {
    function myFunction() {
      // Declare variables
      var input, filter, div, h6, a, i;
      input = document.getElementById('myInput');



      filter = input.value.toUpperCase();

      div = document.getElementsByClassName("myUL");

      h6 = document.getElementsByClassName("docTitle");//document.getElementsByTagName('h6');

    //alert(h6);
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < h6.length; i++) {
          // a = h6[i].getElementsByTagName("a")[0];

          if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {

              $("#"+h6[i].id).parent().parent().css('display','');
          } else {

                  $("#"+h6[i].id).parent().parent().css('display','none');
          }
      }
    }

    $('#pub_cat').change(function(){
        var category = $(this).val();
        $.ajax({
          type: "GET",
          //  data: name,
          url:  "NewsletterController/get_category_pub?cat="+category,
          beforeSend: function() {
              $('#filter_pub').empty();
              $('#filter_pub').html('<h2>Loading</h2>');
          },
          complete: function() {
        // $('#filter_pub').empty();
        // $('#filter_pub').append('<h2>Loading</h2>');
       },
      success: function (result) {

        $('#filter_pub').html('');


      var data = JSON.parse(result);
      console.log(data.length);
    //console.log (data[0].summary);
      var i;

      for(i=0; i<data.length; i++){
          var div_pub = "";
        console.log(data.length);
         div_pub +='<div class="col-md-6">';
            div_pub +='<div class="doccontent flex">'
                div_pub +='<div class="docImg">'
                    div_pub +='<img src="'http://app.naxa.com.np/uploads/publication/28.png'">';
                div_pub +='</div>';
                div_pub +='<div class="docdetailwrp  grow">';
                    div_pub +='<div class="docTitle" id="'+data[i].id+'">'+data[i].title+'</div>';
                    div_pub +='<div class="doctype">Type:Book</div>';
                    div_pub +='<p class="docDetail">'+data[i].summary+'</p>';
                    div_pub +='<div class="docFooter flex justify-content-between">';
                        div_pub +='<div class="doccount">123 downloads </div>';
                        div_pub +='<div class="docsize">';
                           div_pub +='<i class="fa fa-download"></i>';
                        div_pub +='</div>';
                        div_pub +='<button class="btnsmp"> View All';
                            div_pub +='<i class="fa fa-angle-right"></i>';
                        div_pub +='</button>';
                    div_pub +='</div>';
                div_pub +='</div>';
            div_pub +='</div>';
        div_pub +='</div>';

        // div_pub +='<div class="col-md-4 col-xl-3">';
        //   div_pub +='<div class="publication-item" data-mh="publication">';
        //     div_pub +='<div class="thumb"><img src="'+data[i].photo+'"></div>';
        //     div_pub +='<h6 class="name" id="'+data[i].id+'">'+data[i].title+'</h6>';
        //     div_pub +='<p>'+data[i].summary+'</p>';
        //     div_pub +='<a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title="'+data[i].title+'" class="btn btn-primary btn-block">डाउनलोड <i class="la la-download"></i></a>';
        //   div_pub +='</div>';
        // div_pub +='</div>';



    $('#filter_pub').append(div_pub);
    console.log(div_pub);
    }


      }

    })
    });
// });
</script>
