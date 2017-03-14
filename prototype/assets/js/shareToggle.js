$(function(){

  $('.share-button').click(function(){
    $(this).toggleClass('active');
    $(this).next('.share-content').toggleClass('show');
  });

});