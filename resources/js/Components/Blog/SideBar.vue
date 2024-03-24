<script setup>
import {
    Link
} from '@inertiajs/vue3'

import {
    onMounted,
    ref,
    watchEffect
} from 'vue'
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
} from '@headlessui/vue'
import MeiliSearch from 'meilisearch';

const isOpen = ref(false)
const query = ref("")
const client = ref(null)
const results = ref(null)
const seletedindex = ref(0)

function closeModal() {
    isOpen.value = false
}

function openModal() {
    isOpen.value = true
}
onMounted(() => {
    client.value = new MeiliSearch({
        host: "http://localhost:7700"
    })

});

const search = async (query) => {
    if (query) {
        results.value = await client.value.index('liebertens').search(query);
        console.log(results.value)

    }
};
watchEffect(() => {
    search(query.value)
});
</script>
<style scoped>
@import "/public/assets/vendor/bootstrap-icons/bootstrap-icons.css";
@import "/public/assets/vendor/bootstrap/css/bootstrap.min.css";
@import "/public/assets/css/style.css";
@import "/public/fantasy/css/style.css";


#black {
    color: black;
    position: absolute;
    top: 15%;
    width: 95%;
    z-index: 200;
}

.sanjeev {
    
    font-size: 27px;
}
</style>



<template>
<div id="sidebar-final" :class="{' toggle-sidebar' : sidebar  }">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top align-items-center border-color ">
        <nav class="navbar  navbar-expand-lg navbar-light bg-light p-0">
            <div class="container-fluid">
                <button><i class="bi bi-list " @click="side()" style="font-size: 40px; color: white;"></i></button>
                 <button class=" navbar-toggler nav-link nav-icon search-bar-toggle sanjeev me-4 " @click="openModal">
                    <i class="bi bi-search"></i>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item me-2 ">
                            <a class="nav-link" aria-current="page" :href="route('home')">Home</a>
                        </li>
                        <li class="nav-item me-2">
                            <Link class="nav-link" :href="route('blog.home')">Blog</Link>
                        </li>
                        <li class="nav-item me-2">
                            <Link class="nav-link" :href="route('blog.trending')">Trending</Link>
                        </li>
                        <li class="nav-item me-2">
                            <Link class="nav-link" :href="route('blog.trending')">Contact</Link>
                        </li>
                        
                
                    </ul>
                    <div class="d-flex">
                        <button class="nav-link nav-icon search-bar-toggle sanjeev me-4 " @click="openModal">
                            <i class="bi bi-search"></i>
                        </button>
                        <TransitionRoot appear :show="isOpen" as="template">
                            <Dialog as="div" @close="closeModal" class="relative z-10" id="z">
                                <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
                                    <div class="fixed inset-0 bg-black/25 " />
                                </TransitionChild>

                                <div class="fixed inset-0 overflow-y-auto z">
                                    <div class="flex min-h-full items-center justify-center p-4 text-center">
                                        <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0 scale-95" enter-to="opacity-100 scale-100" leave="duration-200 ease-in" leave-from="opacity-100 scale-100" leave-to="opacity-0 scale-95">
                                            <DialogPanel id="black" class="transform overflow-hidden rounded-2xl  p-6 text-left align-middle shadow-xl transition-all" style="background-color: #282828;">

                                                <input type="search" v-model="query" class="w-full border-none block rounded-md">
                                                <hr>
                                                <div v-if="results" class="text-3xl">
                                                Found <span class="text-xl" v-text="results.estimatedTotalHits"></span>
                                                    

                                                    <div class="container-fluid">

                                                        <div class="row ">

                                                            <div v-for="(result,index) in results.hits" :key="index" class="col-md-3 col-6 mt-5 single_travel " :class="{'h-80':height}" >
                                                                <figure>
                                                                    <img class="img-fluid" src="/fantasy/img/travel/t1.jpg" alt="">
                                                                </figure>
                                                                <div class="overlay " :class="{ 'h-80' : height}" </div>
                                                                <div class="text-wrap">
                                                                    <h3>
                                                                        <Link href="">{{result.title}}</Link>
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
                                                    </div>
                                                </div>
                                            </DialogPanel>
                                        </TransitionChild>
                                    </div>
                                </div>
                            </Dialog>
                        </TransitionRoot>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <Link class="nav-link " :href="route('blog.home')">
                <i class="bi bi-grid"></i>
                <span>Home</span>
                </Link>
            </li>

            <li class="nav-item">
                <Link class="nav-link" :href="route('blog.trending')">
                <i class="bi bi-menu-button-wide"></i><span>Trending</span>
                </Link>
            <li class="nav-item">

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed disabled" style="color:#696969"  data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Images Download</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" title="Will be available soon">
                <a class="nav-link collapsed disabled" style="color:#696969" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Services1</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Services 2 </span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Services 3</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" title="Will be available soon">
                <a class="nav-link collapsed disabled" style="color:#696969" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span >Cources</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>Python</span>
                        </a>
                    </li>
                    <li>
                        <a href="/courses/linux-basic">
                            <i class="bi bi-circle"></i><span>Linux Basic</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"  title="Will be available soon">
                <a class="nav-link collapsed disabled" style="color:#696969" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Tutorials</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Larvavel</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>PHP</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Bootstrap</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <Link class="nav-link collapsed" href="/profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
                </Link>
            </li>
            </li>

        </ul>

        
    </aside>

</div>
</template>

<script scoped>
import "/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js";
import "/public/assets/vendor/tinymce/tinymce.min.js";
import "/public/assets/js/main.js";

export default{
 
  data(){
    let size = window.innerWidth;
    let scroll = true;
    let sidebar = true;
    let height = false;
    let lastscrolly = window.scrollY;
   
    if ( size > 1199){
      sidebar = true;
    } else{
      sidebar = false;
    }
    if(screen.width > 500){
        height = false
      }
    else{
        height = true;
      }
    
   
    window.addEventListener('scroll',()=>{
      if (lastscrolly < window.scrollY){
          this.scroll = false;
          
      }
      else{
        this.scroll = true;
      }
     
    })
    return{
      sidebar,
      scroll,
      height,
      
    }
  },
  methods:{
    side(){
    this.sidebar = ! this.sidebar

    },
    
  },
  
}

</script>
