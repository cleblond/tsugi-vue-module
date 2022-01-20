<template>
  <h1>Home Page</h1>
</template>




<script>

    //import { mapGetters } from "vuex";
    //import { mapActions } from "vuex";
    //import axios from "axios";

    export default {
        data() {
            return {
                data: {},

            }
        },
        
        computed: {

          },
        

        
        created() {

            console.log(JSON.parse(window.sessionStorage.getItem('_TSUGI')));
            var _TSUGI = JSON.parse(window.sessionStorage.getItem('_TSUGI'));
            //console.log(_TSUGI);
            var base_url = _TSUGI.rest_path.base_url;
            var mod_path = _TSUGI.rest_path.full;
            var ajax_session = _TSUGI.ajax_session;
             
            fetch(base_url+mod_path+'/ajax.php?'+ajax_session)
              .then(response => response.json())
              .then(data => console.log(data));
             
             
             
            
            
        },
        methods: {
            somemethod() {

                
            }


        }
    }
</script>
