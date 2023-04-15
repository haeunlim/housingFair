<?include_once "../include/head.php";?>
<div class="flex">
<?include_once "../include/left-nav.php"; ?>
  <div id="container" class="main">
        <?include_once "../include/header.php"; ?>
          <div class="inner">
            <section class="cateogry_sect">
              <ul class="category_list_wrap flex__c col_6" style="--mg-t: 2.3076rem; --mg-x: 1.923rem">
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category01.png" alt=""></figure>
                   <p>야채</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category02.png" alt=""></figure>
                   <p>특수야채</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category03.png" alt=""></figure>
                   <p>과일</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category04.png" alt=""></figure>
                   <p>공산품</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category05.png" alt=""></figure>
                   <p>축산</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category06.png" alt=""></figure>
                   <p>수산/건어물</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category07.png" alt=""></figure>
                   <p>곡류/견과</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category08.png" alt=""></figure>
                   <p>반찬</p>
                  </a>
                </li>
                <li>
                  <a href="#!">
                   <figure><img src="../assets/img/category/category09.png" alt=""></figure>
                   <p>잡화</p>
                  </a>
                </li>
               
              </ul>
            </section>
         
          </div>
        </div>
  
    </div>
    <script>
        $('.category_list_wrap li').on('click',function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
  <?include_once "../include/footer"; ?>