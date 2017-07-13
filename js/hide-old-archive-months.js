(function($) {
    // Default the pre-2017 dates to hidden
     $('aside.widget_archive > ul > li').each(function(i, element) {
        if (/(.*) 2(008|009|010|011|012|013)$/.test($(element).text())){
            $(element).hide();
        }
    });
    // Append a 'show all' link
    var showAll = $('<div class="text-right"><button class="btn-sm btn-secondary">Show All</button></div>');
    $('button', showAll).on('click', function() {
        $('aside.widget_archive > ul > li').show();
        $(this).hide();
    });
    $('aside.widget_archive').append(showAll);
})(jQuery);
