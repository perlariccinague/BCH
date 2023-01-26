<script>
    //__________________________________________ Partner

    $(document).ready(function(){
        $('.owl-member').owlCarousel({

            loop: true,
            margin: 20,
            autoplay: true,
            autoplaySpeed: 7000,
            autoplayTimeout: 5000,
            //smartSpeed: 5000,
            //fluidSpeed: 1000,
            'responsive': {
                0: {
                    items: 2,
                    slideBy: 1
                },
                980: {
                    items: 3,
                    slideBy: 1
                },
                1280: {
                    items: 5,
                    slideBy: 1,
                }
            }
        });
    });


    //__________________________________________ History


    $(document).ready(function() {
        var owl = $(".owl-history"),
// rangeArr = [],
            inputType =$("input[type=range]");
        owl.owlCarousel({
// 'loop': true,
// 'mouseDrag': false,
// 'autoplay': true,
            margin: 20,

            'responsive': {
                0: {
                    items: 1,
                    slideBy: 1
                },
                980: {
                    items: 2,
                    slideBy: 1
                },
                1280: {
                    items: 3,
                    slideBy: 1,
                },
                1800: {
                    items: 4,
                    slideBy: 1,
                }
            }

        });


        owl.on('changed.owl.carousel', function(event) {
            console.log(event.item.index);
            inputType.val(event.item.index);

        });

        $(".go-me").click(function() {
            owl.trigger("next.owl.carousel");
        });
        $(".back-me").on("click", function() {
            owl.trigger("prev.owl.carousel");
        });
        $("input").on("change", function(e) {
            e.preventDefault();
            console.log(inputType.val());
// console.log(e.item.index);
// FIGURE OUT HOW TO GET CAROUSEL INDEX

            $('.owl-carousel').trigger('to.owl.carousel', [inputType.val(),1,true]);

        });
    });

</script>

<script type="text/javascript">

    const help = new Vue({
        el: '#vue-history',
        delimiters: ['${', '}'],
        data: {
            count: '',
            window: {
                width: 0,
                height: 0
            }
        },

        methods: {

            countf: function (){

                const screen_m = 900;
                const screen_l = 1280;
                const screen_xl = 1800;

                let screen_value = this.window.width;
                let display_element = 0;

                let element = document.getElementById('vue-history');
                let calc = element.querySelectorAll(".ce_text").length;

                if (screen_value > screen_xl) {
                    display_element = 4;
                }
                else if(screen_value > screen_l && screen_value < screen_xl){
                    display_element = 3;
                }
                else if(screen_value < screen_l && screen_value > screen_m){
                    display_element = 2;
                }
                else {
                    display_element = 1;
                }

                this.count = calc - display_element;

            },

            handleResize() {
                this.window.width = window.innerWidth;
                this.window.height = window.innerHeight;
            }

        },

        created() {
            window.addEventListener('resize', this.handleResize);
            this.handleResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize);
        },

        beforeMount(){
            this.countf()
        }
    });

</script>