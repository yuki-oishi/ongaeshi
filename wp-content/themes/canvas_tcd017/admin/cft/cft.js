jQuery(document).ready(function($){

  if($('body').hasClass('post-type-product')) {
    countField("textarea.letter_count");
  }

  function countField(target) {
    $(target).after("<div class=\"count\"></div>");
    $(target).bind({
      keyup: function() {
        setCounter();
      },
      change: function() {
        setCounter();
      }
    });
    setCounter();
    function setCounter(){
      $("div.count").text("現在の文字数："+$(target).val().length);
    };
  };

  $("div.product_area").before("<div class='form_headline'>商品の情報</div>");
  $("div.company_area").before("<div class='form_headline'>会社の情報</div>");
  $("div.page_cft_area").before("<div class='form_headline'>ページの画像登録</div>");

});