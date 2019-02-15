<?php $pub_cat_nep='<option value=0>सबै</option>
 <option value="files">फाईल</option>
 <option value="video">भिडियो</option>
 <option value="images">इमेज</option>
 <option value="audio">Audio</option>';

$pub_cat_en='<option value=0>ANY</option>
 <option value="files">Files</option>
 <option value="video">Videos</option>
 <option value="images">Images</option>
 <option value="audio">Audio</option>';
?>

    <section class="searchpanel">
        <div class="container">
          <form action="" method="POST">
            <div class="search flex contactSearch">
                <div class="inputholder grow">
                    <label for=""><?php echo !empty(SEARCH)?SEARCH:'' ?></label>
                    <input class="search--input" name="keywords" id="myInput" placeholder="Enter to search..." type="text" onkeyup="myFunction()">
                </div>
                <div class="selectHolder">
                    <label for="pub_cat">Select Hazard category<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat" name="category">
                      <option value=>ANY</option>
                    <?php
                    if($pub){
                      foreach ($pub as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>"><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                    </select>
                </div>
                <div class="selectHolder">
                    <label for="pub_cat">Select File Type<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat" name="type">
                    <?php $lang=$this->session->get_userdata('Language');
                   if($lang['Language']=='en'){
                        $languageh='en';
                    }else{
                       $languageh='nep';
                    }
                    if ($languageh=='en') {
                        echo $pub_cat_en;
                      }else {
                        echo $pub_cat_nep;
                      } ?>
                    </select>
                </div>
                <div class="selectHolder">
                    <label for="pub_cat">Select file category type<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat" name="subcat">
                      <option value=>ANY</option>
                     <?php if($pub){
                      foreach ($pubcat as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>"><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn-primary search--btn"><?php echo SEARCH ?></button>
            </div>
            </form>
        </div>
    </section>
    <section class="section-padding-half">
        <div class="container">
            <h4>Documents</h4>
            <div class="row" id="filter_pub">
                <?php if($publicationdata): //echo "<pre>";print_r($publicationdata);die;
                foreach($publicationdata as $d ){ ?>
                <div class="col-md-6 ">
                    <div class="doccontent flex ">
                      <?php if($d['type'] == "images"){ ?>
                        <div class="docImg">
                            <img src="<?php echo base_url()?>/uploads/publication/28.png" alt="<?php echo $d['title']?>">
                        </div>
                      <?php } if($d['type'] == "video"): ?>
                      <!-- <img src="https://i.ytimg.com/vi/" alt=""> -->
                        <iframe width="190" height="195" src="<?php echo $d['videolink'];  ?>"></iframe>
                      <?php  endif; ?>
                      <?php if($d['type'] == "files"): ?>
                        <a href="<?php echo $d['file'] ?>"><i class="fa-files-o"></i><img class="default_img" src="<?php echo base_url()?>/uploads/doc.png" alt="<?php echo $d['title']?>"></a>
                      <?php  endif; ?>
                      <?php if($d['type'] == "audio"): ?>

                      <?php  endif; ?>
                        <div class="docdetailwrp  grow">
                            <div class="docTitle" id="<?php echo $d['id'] ?>">
                               <?php echo $d['title']?>
                            </div>
                            <div class="doctype">
                                Type: <?php echo $d['type'] ?>
                            </div>
                            <p class="docDetail">
                               <?php echo $this->general->string_limit($d['summary'],100); ?>
                            </p>
                            <div class="docFooter flex justify-content-between">
                                <?php if($d['type'] == "files"): ?>
                                <div class="doccount">
                                    123 downloads
                                </div>


                                <div class="docsize">
                                  <?php
                                  $path=str_replace('http://kmc.naxa.com.np/','', $d['file']);
                                  if(file_exists($path)){
                                    $size=filesize($path);
                                    $size_kb=$size/1024;
                                   echo round($size_kb).' kB';
                                   $link= base_url().'/publication/download?file='.$d['file'].'&& title='.$d['title'];
                                 }else{
                                   echo '0 KB';
                                   $link='#';
                                 }


                                  ?>
                                    <a href="<?php  echo $link ?>"><?php echo !empty(DOWNLOAD)?DOWNLOAD:'' ?> <i class="fa fa-download"></i></a>
                                   <!-- <i class="fa fa-download"></i> -->
                                </div>
                                  <?php endif; ?>
                                <a href="<?php echo base_url()?>/publication/details/?id=<?php echo base64_encode($d['id']);?>" >
                                <button class="btnsmp"> View More
                                    <i class="fa fa-angle-right"></i>
                                </button></a>
                            </div>

                        </div>

                    </div>
                </div>
            <?php } endif; ?>
            </div>
        </div>
    </section>
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


    $('#filter_pub').append(div_pub);
    console.log(div_pub);
    }


      }

    })
    });
// });
</script>
