

<script>

    const slug_2 = window.location.href.substring(
        window.location.href.lastIndexOf('/', window.location.href.lastIndexOf('/')-30)
    );

    const fallback_url = window.location.href.split('projekte')[0];

    let split_slug_2 = slug_2.split("/");
    console.log("Split All: " + split_slug_2);


    for(let x = 0; x < split_slug_2.length; x++){
        if((split_slug_2[x] === "top" || split_slug_2[x] === "kategorie") &&
            (split_slug_2[x+2] === "top" || split_slug_2[x+2] === "kategorie")){
                console.log("treffer");
                location.replace(fallback_url + "projekte");
        }
    }

</script>

<script>

    const slug = window.location.href.substring(
        window.location.href.lastIndexOf('/', window.location.href.lastIndexOf('/')-1)
    );

    let split_slug = slug.split("/");

    split_slug = split_slug[1];


    const filter_erweiter = document.getElementById('filter_erweitert');
    const filter_default = document.getElementById('filter_default');

    if(split_slug === "top"){
        filter_erweiter.style.display = "unset";
        filter_default.style.display = "none";
    }

    else if(split_slug === "kategorie"){
        filter_erweiter.style.display = "none";
        filter_default.style.display = "unset";
    }

</script>

<script>


    const help = new Vue({
        el: '#vue-filter',
        delimiters: ['${', '}'],
        data: {
            switch: true,
        },

        methods: {

            switch: function (){

                const class_default = "filter_default";
                const class_erweitert = "filter_erweitert";



                /*

                                const screen_m = 900;
                                const screen_l = 1280;

                                let screen_value = this.window.width;
                                let display_element = 0;

                                let element = document.getElementById('vue-history');
                                let calc = element.querySelectorAll(".ce_text").length;

                                if(screen_value > screen_l){
                                    display_element = 3;
                                }
                                else if(screen_value < screen_l && screen_value > screen_m){
                                    display_element = 2;
                                }
                                else {
                                    display_element = 1;
                                }

                                this.count = calc - display_element;
                */

            },

/*            beforeMount(){
                this.switch()
            }*/


        },
    });


</script>