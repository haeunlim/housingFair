

  // 체크박스말고도 누르면 불들어오게 
  $('.prd_table td *:not(button, select, input)').on('click',function(){
      let $tr = $(this).closest('tr');
      $tr.toggleClass('active');
      if($tr.hasClass('active')==true){
          $tr.find('.checkbox-wrapper input').prop('checked', true);
      }else{
          $tr.find('.checkbox-wrapper input').prop('checked', false);
      }
  });

  // td에 있는 체크박스 다 선택되면 allChk에 checked되게 
  $('td input[name="prd_chk"]').on('change', function(){
      let total = $('td input[name="prd_chk"]').length;
      if($('td input[name="prd_chk"]:checked').length ==  total){
          $('input[id="allChk"]').prop('checked',true);
      }else{
          
          $('input[id="allChk"]').prop('checked',false);
      }
  })
  // 전체 체크 액티브
  $('input[id="allChk"]').on('change',function(){

      const $parentTable = $(this).parents('.prd_table');
      if($(this).is(':checked')){
          $('input[name="prd_chk"]').prop('checked', true);
          $parentTable.find('tr').addClass('active');
      }else{
          $('input[name="prd_chk"]').prop('checked', false);
          $parentTable.find('tr').removeClass('active');
      }
  })

  // 순위변경 온오프
  $('.ranking_btn_wrap button').on('click',function(){
      if($(this).hasClass('active') == true){
          $(this).removeClass('active');
      }else{
          $('.ranking_btn_wrap button').removeClass('active');
          $(this).addClass('active');

      }

  })