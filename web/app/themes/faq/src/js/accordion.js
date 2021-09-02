$(document).ready(function() {
    $('.accordion').find('li').click(function() {
        var $this = $(this);
        var isActive = $this.hasClass('active');

        $('.accordion').find('li').removeClass('active');

        if (!isActive) {
            $this.toggleClass('active');
        }
    });
});
