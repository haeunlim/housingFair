<div class="left-nav">
    <div class="inner flex_b_s dr-col">
    <div class="top">
        <h1 class="logo">
        <a href="#!"
            ><img src="../assets/img/logo.png" alt="ssams"
        /></a>
        </h1>
        <nav id="nav">
        <ul>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/main/") !== false){?>active<?}?>"><a href="../main/">메인</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/category/") !== false){?>active<?}?>"><a href="../category/">카테고리 관리</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/product/") !== false){?>active<?}?>"><a href="../product/">상품관리</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/order/") !== false){?>active<?}?>"><a href="../order/">주문관리</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/pay/") !== false){?>active<?}?>"><a href="../pay/">정산관리</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/notice/") !== false){?>active<?}?>"><a href="../notice/">공지사항</a></li>
            <li class="<?if(strpos($_SERVER[PHP_SELF],"/management/") !== false){?>active<?}?>"><a href="../management/">웹 관리자</a></li>
        </ul>
        </nav>
    </div>
    <button class="logout-btn" onclick="location.href='../login/'">로그아웃</button>
    </div>
</div>