    <!-- <script setup>
            defineProps({blogs:Object,jsons:Object});
            
            
            
    </script> -->
<script>
import Layout from '@/Layouts/Layout.vue';
export default{
    layout:Layout,
    props:{
        blogs:Object,
        jsons:Object
    },
    data(){
        let image1 = this.jsons["image1"];
        return{
            image1,
                }
    },
}

</script>


<style scoped>
@import "/public/fantasy/css/bootstrap.css";
*{
    font-family: -apple-system, 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Inter', 'Helvetica', 'Arial', sans-serif;
    
    color: black;
}
h1{
    font-weight: 100;
}
</style>


<template>
    <div class="container-fluid" style="position: relative; top:70px">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-3">
                  <div class="card-title"></div>
                <div class="card-body">
                    <h1>{{ blogs.title }}</h1>
                   <div v-if="jsons" class="m-3">
                   
                    <p> {{ jsons["content1"] }}</p>
                    <p>{{ jsons["content2"] }}</p>


                   
                 
                  <img :src="image1" alt="">
                   </div>
                   </div>
                </div>
                
            </div>
            <div class="col-md-3 mt-3">
                <div class="row">
                    <div class="col-12 pb-2  ">
                        <div class="card">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas voluptates assumenda harum hic! Ad ducimus ullam ipsam debitis mollitia laborum.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid veniam, quas voluptatum accusantium ex rerum deserunt exercitationem consectetur quis. Recusandae!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>