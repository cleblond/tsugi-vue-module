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

            console.log(JSON.parse(window.sessionStorage.getItem('_TSUGI')).react_token);
            
            
        },
        methods: {
            somemethod() {

                
            }


        }
    }
</script>
