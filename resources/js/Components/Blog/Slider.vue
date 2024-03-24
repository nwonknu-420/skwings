<style scoped>
@import "/public/slider/style.css";
</style>

 <template>
<div id="sliderid" class="slider ">
    
    <div class="list">
        <div class="item" :class="{active : slider1}">
            <img src="/storage/slider-images/slider1.jpg">
            <div class="content">
                <p>design</p>
                <h2>Slider 01</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item " :class="{active : slider2}">
            <img src="slider/image/img2.jpg">
            <div class="content">
                <p>design</p>
                <h2>Slider 02</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item" :class="{active : slider3}">
            <img src="slider/image/img3.jpg">
            <div class="content">
                <p>design</p>
                <h2>Slider 03</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item" :class="{active : slider4}">
            <img src="slider/image/img4.jpg">
            <div class="content">
                <p>design</p>
                <h2>Slider 04</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item" :class="{active : slider5}">
            <img src="slider/image/img5.jpg">
            <div class="content">
                <p>design</p>
                <h2>Slider 05</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
    </div>
  

   
    <div class="thumbnail">
        <div class="item" :class="{active: slider1}" @click="item1()">
            <img src="slider/image/img1.png">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item" :class="{active: slider2}" @click="item2()">
            <img src="slider/image/img2.jpg">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item" :class="{active: slider3}" @click="item3()">
            <img src="slider/image/img3.jpg">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item" :class="{active: slider4}" @click="item4()">
            <img src="slider/image/img4.jpg">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item" :class="{active: slider5}" @click="item5()">
            <img src="slider/image/img5.jpg">
            <div class="content">
                Name Slider
            </div>
        </div>
    </div>

</div>
</template>



<script>
export default {
        
    data() {
           let slider1= true;
           let slider2= false;
           let slider3= false;
           let slider4= false;
           let slider5= false;
           setInterval(() => {
               
           }, 5000);
        return {

            slider1,
            slider2,
            slider3,
            slider4,
            slider5,

        }

    },
    methods: {
        item1() {

            this.slider1 = true;
            this.slider2 = false;
            this.slider3 = false;
            this.slider4 = false;
            this.slider5 = false;
        },
        item2() {

            this.slider1 = false;
            this.slider2 = true;
            this.slider3 = false;
            this.slider4 = false;
            this.slider5 = false;
        },
        item3() {

            this.slider1 = false;
            this.slider2 = false;
            this.slider3 = true;
            this.slider4 = false;
            this.slider5 = false;
        },
        item4() {

            this.slider1 = false;
            this.slider2 = false;
            this.slider3 = false;
            this.slider4 = true;
            this.slider5 = false;
        },
        item5() {

            this.slider1 = false;
            this.slider2 = false;
            this.slider3 = false;
            this.slider4 = false;
            this.slider5 = true;
        },

    }
}
</script>

