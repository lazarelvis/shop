$('.toggle-login').click(function(){
    $('.login').toggle();
  });
  
  $(document).mouseup(function (e) {
      var container = $(".login");
      if (!container.is(e.target)
          && container.has(e.target).length == 0) 
      {
          container.fadeOut();
      }
  });



  