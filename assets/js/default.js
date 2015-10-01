$(function(){
    $('.photos-container').isotope({
        itemSelector: '.photo',
        layoutMode: 'masonry'
    });

    $('.photo-navigation .iso-nav-btn').on('click', function(){
        filter = $(this).data('category');
        console.log(filter);
        $('.photos-container').isotope({
            filter: filter
        });

        $(this).parent().find('.active').toggleClass('active');
        $(this).toggleClass('active');
    });
});