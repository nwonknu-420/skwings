<script>
import Layout from '@/Layouts/Layout.vue';
export default{
    layout:Layout,
    props:{
        users:Object
    },
    data(){
            let height = false
            if (screen.width > 500){
                height = true;
            }
        return {
            height,
            path:"/storage/blog-images/1/sanjeev.avif",
        }
    }
}

</script>

<script setup>


import { Link } from '@inertiajs/vue3';

</script>
<template>

<div class="container-fluid">
    <div class="row mt-5 pt-4">
    <div class="col-lg">
        <div class="blog-meta bottom d-flex justify-content-center align-items-center">
            <div>
                <Link class="read_more text-white p-2 " v-for="link in users.links" :href="link.url" v-html="link.label"></Link>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row justify-content-center">
    
    <div v-for="user in users.data" class="col-md-3 col-6 mt-5 single_travel">
        <figure>
            <img class="img-fluid" style="height:360px; width: 280px" :src="path" alt="">
        </figure>
        <div class="overlay"></div>
        <div class="text-wrap">
            <h3>
                <Link href="">{{user.title}}</Link>
            </h3>
            <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                <div class="meta">
                    <a href="#">
                        <span class="icon fa fa-calendar"></span> March 14, 2018
                        <span class="icon fa fa-comments"></span> 05
                    </a>
                </div>
                <div>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="offset-lg-7 col-lg-4">
        <div class="blog-meta bottom d-flex justify-content-end align-items-center">
            <div>
                <Link class="read_more text-white p-2" v-for="link in users.links" :href="link.url" v-html="link.label"></Link>
            </div>
        </div>
    </div>
</div>

</template>
<style scoped>
@import "/public/fantasy/css/bootstrap.css";
@import "/public/fantasy/css/style.css";

</style>