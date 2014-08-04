/**
 * Use JS for ajax site navigate
 */
$('body').delegate('a', 'click', function(e){
    // Disable default page load
    e.preventDefault();

    // Block UI
    $.blockUI();
    
    // Set the clicked link as active
    $(this).parents('.container').find('li').removeClass('active');
    $(this).parent('li').addClass('active');
    
    // Change url in browser
    var url = $(this).attr('href');
    
    window.history.pushState('', $(this).html(), url);    
    
    // Ajax
    $.get(
        url,
        {},
        function(data)
        {
            $('.content').html(data);
        },
        'html'
    );
    
    // Unblock UI
    $.unblockUI();
});