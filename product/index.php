<?include_once "../include/head.php";?>
<div class="flex">
<?include_once "../include/left-nav.php"; ?>
  <div id="container" class="main">
        <?include_once "../include/header.php"; ?>
          <div class="inner">
          <section class="cateogry_sect">
              <div class="ttl-box flex_b_c">
                <h3>전체상품</h3>
                <div class="btn-wrap">
                  <button
                    type="button"
                    class="btn btn-outline-point btn-lg"
                    data-bs-toggle="popup"
                    data-bs-target="#category_popup"
                  >
                    카테고리 선택
                  </button>
                  <button
                    type="button"
                    class="btn btn-point"
                    data-bs-toggle="popup"
                    data-bs-target="#product_popup"
                  >
                    + 상품추가
                  </button>
                </div>
              </div>
              <div class="prd_table table-centered tac rounded">
                <table>
                  <colgroup>
                    <col width="6.578%" />
                    <col width="11.961%" />
                    <col width="*" />
                    <col width="13.157%" />
                    <col width="7.7751%" />
                    <col width="11.3636%" />
                    <col width="13.1578%" />
                    <col width="7.177%" />
                  </colgroup>
                  <thead>
                    <tr>
                      <th>번호</th>
                      <th>상품코드</th>
                      <th>상품명</th>
                      <th>판매가격</th>
                      <th>재고</th>
                      <th>순위</th>
                      <th>진열여부</th>
                      <th>삭제</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="number"><span>10</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!"
                              >[22년산] 믿고먹는 우리쌀 믿고먹는 우리쌀믿고먹는
                              우리쌀</a
                            >
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>9</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p><a href="#!">미국산 당도선별 고당도 큐 큐큐</a></p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>8</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!">이것이 리얼 짭짜리다 짭짤 짭짤짭짤</a>
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>7</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!"
                              >비파괴 당도선별 샤인머스 샤인머스샤인머스</a
                            >
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>6</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!">[자연촌] 순두부 2,000g 2,000g2,000g</a>
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>5</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!"
                              >[필리핀산] DOLE 스위티오 스위티오스위티오</a
                            >
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>4</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p><a href="#!">친환경 자연주의 무농약 딸 딸딸</a></p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>3</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!">아삭아삭 단감 5입 870g (봉) 봉)봉)</a>
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>2</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!">[자연촌] 순두부 2,000g 2,000g2,000g</a>
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="number"><span>1</span></td>
                      <td><span>2110270002</span></td>
                      <td class="prd_name">
                        <div class="flex__c">
                          <figure>
                            <img
                              src="../assets//img/product/prd_img01.png"
                              alt=""
                            />
                          </figure>
                          <p>
                            <a href="#!"
                              >[필리핀산] DOLE 스위티오 스위티오스위티오</a
                            >
                          </p>
                        </div>
                      </td>
                      <td>
                        <strong class="price">15,000</strong>
                      </td>
                      <td><span>100</span></td>
                      <td>
                        <div class="ranking_btn_wrap">
                          <button class="up btn square" type="button">
                            <i class="hei hei-up"></i>
                          </button>
                          <button class="down btn square" type="button">
                            <i class="hei hei-down"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <select name="" id="" class="bs-select">
                          <option value="">진열</option>
                          <option value="">중지</option>
                        </select>
                      </td>
                      <td>
                        <div>
                          <button class="del_btn btn square" type="button">
                            <i class="hei hei-close"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <?php include '../include/pagination.php';?>
            </section>
          </div>
        </div>
    </div>
    <script src="./propduct.js"></script>
  <?php include_once '../include/popup.php';?>
  <?include_once "../include/footer"; ?>