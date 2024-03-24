<script scoped>
import Layout from '@/Layouts/Layout.vue';
export default{
    layout:Layout,
    props:{
        users:Object
    },
    data(){
        let height = false;
        
        if ( screen.width < 500){
            height = true;
        }
        return{
            path:"storage/blog-images/1/sanjeev.avif",
            height,
        }
    }


}

</script>
<style scoped>
@import "/public/fantasy/css/bootstrap.css";
@import "/public/fantasy/css/style.css";

</style>
<script setup>


import { Link } from '@inertiajs/vue3';
import Content from '@/Components/Blog/Content.vue';
import Slider from '@/Components/Blog/Slider.vue';
</script>
<template>
<Slider></Slider>
<Content>
    <div class="container-fluid mt-2">

<div class="row">
    
    <div v-for="user in users.data" class="col-md-3 col-6 mt-5 single_travel " :class="{'h-80' : height}">
       
        <figure>
            <img class="img-fluid " style="height: 380px; width: 280px;" :class="{'cards':height}" :src="path" alt="">
            
            </figure>
            <Link :href="'blog/search/'+user.id +'/' + user.title"> 
                <div class="overlay" :class="{'h-80' : height}"></div>
            </Link>
        <div class="text-wrap">
            <h3>
                <Link :href=" 'blog/search/'+ user.id +'/' + user.title">{{user.title}}</Link>
            </h3>
            <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                <div class="meta">
                    <a href="#">
                        <span class="icon fa fa-calendar"></span> March 14, 2018
                        <span class="icon fa fa-comments"></span> {{ user.id }}
                    </a>
                </div>
                <div>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
            <div class="offset-lg-7 col-lg-4">
                <div class="blog-meta bottom d-flex justify-content-end align-items-center">
                    <div>
                        <Link href="trending" class="read_more text-white" >Load More Posts</Link>
                    </div>
                </div>
            </div>
        </div>
</div>
	
</Content>

</template>
<style>
    
    .cards{
        height: 300px !important;
    }
    .zero{
        bottom:10px;

    }

    #cards{
        position: absolute;
    }
</style>