$(function () {
    
    var windowsize = $(window).width();
    if (windowsize > 849) {
        $(window).on('mousewheel', function () {
            var a = $('#section3').hasClass('active');
            setTimeout(function () {
                if (a) {
                    // count01 call
                    new numberCounter("count01", 9999);
                    //  count02 call
                    $('#count02').each(function () {
                        var $this = $(this),
                            countTo = $this.attr('data-count');

                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 1000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                setTimeout(function () {
                                    $this.text('10');
                                }, 600);
                            }
                        });
                    });
                }
            }, 500);

        });
        $('#fp-nav ul li a').on('click', function () {
            var a = $('#section3').hasClass('counting');
            setTimeout(function () {
                if (a) {
                    // count01 call
                    new numberCounter("count01", 9999);
                    //  count02 call
                    $('#count02').each(function () {
                        var $this = $(this),
                            countTo = $this.attr('data-count');

                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 1000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                setTimeout(function () {
                                    $this.text('10');
                                }, 600);


                            }
                        });
                    });
                }
            }, 500);
        });
    }

});

// mobile count script
$(function () {
    var windowsize = $(window).width();
    if (windowsize < 850) {
        var inVisible = false;
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (inVisible == false) {
                if (scrollTop > $('#section3').offset().top - 200) {
                    inVisible = true;
                    new numberCounter("count01", 9999);
                    //  count02 call
                    $('#count02').each(function () {
                        var $this = $(this),
                            countTo = $this.attr('data-count');

                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 1000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                setTimeout(function () {
                                    $this.text('10');
                                }, 600);
                            }
                        });
                    });
                }
            };
        });
    }

});