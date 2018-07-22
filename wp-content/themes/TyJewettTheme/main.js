var menuActivated = false;

$('#header-menu-button').click(function(e){
    e.preventDefault();
    console.log('boom');
    if (menuActivated === true) {
        $('header').css('display', 'none');
        $('#header-menu-button').text('Menu');
        $('html').css('overflow', 'auto');
        menuActivated = false;
    } else {
        $('header').css('display', 'block');
        $('#header-menu-button').text('Close');
        $('html').css('overflow', 'hidden');
        menuActivated = true;
    }
});