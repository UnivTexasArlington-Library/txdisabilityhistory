$(document).delegate('#edit-reset','click',function(event)
  {
    event.preventDefault();
    $('form').each(function(){
    $('form select option').removeAttr('selected');
    this.reset();
    });
   $('.views-submit-button .form-submit').click();
    return false;
  });