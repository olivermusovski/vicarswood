<template>
    <div class="">
        <!-- <b-form method="POST" action="this.route"> -->
        <h4>Finish Options:</h4>

        <label>Pedestal:</label>
        <b-form-radio-group class="" v-model="pedestalSelected" :options="pedestalOptions2" @change="checkOptionsDrawer2"></b-form-radio-group>

        <label>Drawer:</label>
        <b-form-radio-group v-model="drawerSelected" :options="drawerOptions2" @change="checkOptionsTop2"></b-form-radio-group>

        <label>Top:</label>
        <b-form-radio-group v-model="topSelected" :options="topOptions2" @change="createCode"></b-form-radio-group>

        <!-- <br>
        <label>Pedestal:</label>
        <b-form-select v-model="pedestalSelected" :options="pedestalOptions" @input="checkOptionsDrawer(pedestalSelected)"></b-form-select>

        <label>Drawer:</label>
        <b-form-select v-model="drawerSelected" :options="drawerOptions" @change="checkOptionsTop(drawerSelected)"></b-form-select>

        <label>Top:</label>
        <b-form-select v-model="topSelected" :options="topOptions" @change="createCode()"></b-form-select> -->

        <div class="mt-3" v-if="show">Selected: <strong>{{ code }}</strong></div>

        <div v-if="show">
            <b-img class="shadow-sm w-25" v-bind:src="imagePath" fluid rounded alt="Responsive image"></b-img>
        </div>

        <label>Hardware:</label>
        <b-form-radio-group v-model="hardwareSelected" :options="hardwareOptions" @change="getHardwareSelection"></b-form-radio-group>

        <div class="row mt-3">
            <div class="col-12 col-md-3">
                <b-button variant="primary" class="btn btn-primary btn-lg btn-block mb-2" @click="submit"><i class="fas fa-shopping-cart"></i> Add to Cart</b-button>    
            </div>
        </div>

        <b-button id="submitButton" type="submit" variant="primary" class="btn-block">Submit</b-button>    
        <!-- </b-form> -->

    </div>
</template>

<script>
    export default {
        props: ['product'],

        data() {
            return {
                pedestalSelected: null,
                // pedestalOptions: [
                //   { value: 'A', text: 'Natural Pine' },
                //   { value: 'B', text: 'Turquoise' },
                //   { value: 'C', text: 'Cherry' },
                //   { value: 'G', text: 'Green' },
                //   { value: 'N', text: 'Naked, Unfinished' },
                //   { value: 'R', text: 'Red' },
                //   { value: 'Z', text: 'Dark' }
                // ],
                pedestalOptions2: [
                  { value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"},
                  { value: 'B', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Turquoise.png' class='fluid rounded shadow-sm' >" },
                  { value: 'C', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Cherry.png' class='fluid rounded shadow-sm' >" },
                  { value: 'G', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Green.png' class='fluid rounded shadow-sm' >" },
                  //{ value: 'N', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_.png' class='fluid rounded w-50 h-75' >" },
                  { value: 'R', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Red.png' class='fluid rounded shadow-sm' >" },
                  { value: 'Z', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Dark.png' class='fluid rounded shadow-sm' >" }
                ],
                drawerSelected: null,
                //drawerOptions: [],
                drawerOptions2: [],
                topSelected: null,
                //topOptions: [],
                topOptions2: [],
                code: null,
                show: false,
                imagePath: null,
                hardwareSelected: null,
                hardwareOptions: [
                    { value: 'B3', html:"<img src='http://vicarswood.test/images/FinishCombinations/Hardware_DecorativeKnob.png' class='fluid rounded shadow-sm' >" },
                    { value: 'A3', html:"<img src='http://vicarswood.test/images/FinishCombinations/Hardware_DecorativePull.png' class='fluid rounded shadow-sm' >" },
                    { value: '03', text:"No Hardware"}
                ],
                hardwareImagePath: null,
                productId: null,
                finishOptionId: null,
                hardwareOptionId: null
            };
        },

        mounted() {
            this.load();
        },

        methods: {
            load() {
                //this.productId = { product };
            },

            // checkOptionsDrawer(value) {
            //     this.show = false;
            //     this.drawerOptions = [];
            //     this.drawerSelected = null;
            //     this.topOptions = [];
            //     this.topSelected = null;

            //     var found = this.pedestalOptions.find(option => option.value === this.pedestalSelected);
            //     this.drawerOptions.push(found);

            //     switch(value) {
            //         case 'N':
            //             break;
            //         case 'A':
            //             break;
            //         case 'C':
            //             this.drawerOptions.push({ value: 'A', text: 'Natural Pine'});
            //             break;
            //         default:
            //             this.drawerOptions.push({ value: 'A', text: 'Natural Pine'});
            //             this.drawerOptions.push({ value: 'C', text: 'Cherry'});
            //     }
            // },

            checkOptionsDrawer2(value) {
                //var value2 = this.pedestalSelected
                this.show = false;
                this.drawerOptions2 = [];
                this.drawerSelected = null;
                this.topOptions2 = [];
                this.topSelected = null;

                var found = this.pedestalOptions2.find(option => option.value === value);
                this.drawerOptions2.push(found);

                switch(value) {
                    case 'N':
                        break;
                    case 'A':
                        break;
                    case 'C':
                        this.drawerOptions2.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        break;
                    default:
                        this.drawerOptions2.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        this.drawerOptions2.push({ value: 'C', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Cherry.png' class='fluid rounded shadow-sm' >"});
                }
            },

            // checkOptionsTop(value) {
            //     this.show = false;
            //     this.topOptions = [];
            //     this.topSelected = null;
            //     this.code = null;
                
            //     var found = this.pedestalOptions.find(option => option.value === this.pedestalSelected);
            //     this.topOptions.push(found);
                
            //     switch(value) {
            //         case 'N':
            //             break;
            //         case 'A':
            //             if(this.pedestalSelected != 'A') {
            //                 var found = this.drawerOptions.find(option => option.value === this.drawerSelected);
            //                 this.topOptions.push(found);
            //             }
            //             break;
            //         case 'C':
            //             if(this.pedestalSelected == 'C') {
            //                 this.topOptions.push({ value: 'A', text: 'Natural Pine'});
            //             } else {
            //                 var found = this.drawerOptions.find(option => option.value === this.drawerSelected);
            //                 this.topOptions.push(found);
            //             }
            //             break;
            //         default:
            //             this.topOptions.push({ value: 'A', text: 'Natural Pine'});
            //             this.topOptions.push({ value: 'C', text: 'Cherry'});
            //     }
            // },

            checkOptionsTop2(value) {
                this.show = false;
                this.topOptions2 = [];
                this.topSelected = null;
                this.code = null;
                
                var found = this.pedestalOptions2.find(option => option.value === this.pedestalSelected);
                this.topOptions2.push(found);
                
                switch(value) {
                    case 'N':
                        break;
                    case 'A':
                        if(this.pedestalSelected != 'A') {
                            var found = this.drawerOptions2.find(option => option.value === value);
                            this.topOptions2.push(found);
                        }
                        break;
                    case 'C':
                        if(this.pedestalSelected == 'C') {
                            this.topOptions2.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        } else {
                            var found = this.drawerOptions2.find(option => option.value === value);
                            this.topOptions2.push(found);
                        }
                        break;
                    default:
                        this.topOptions2.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        this.topOptions2.push({ value: 'C', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Cherry.png' class='fluid rounded shadow-sm' >"});
                }
            },

            createCode(value) {
                this.code = this.pedestalSelected + this.drawerSelected + value;
                this.imagePath = "/images/FinishCombinations/"+this.product+"-1"+this.code+".png";
                this.show = true;

                axios.get('/product-options', {
                    params : {
                        code : this.code,
                        productId: this.product.id
                    }
                }).then(response => {
                    console.log(response);
                    this.finishOptionId = response.data;
                });
            },

            getHardwareSelection(value) {
                axios.get('/product-options-hardware', {
                    params : {
                        hardwareSelected : value,
                        productId: this.product.id
                    }
                }).then(response => {
                    console.log(response);
                    this.hardwareOptionId = response.data;
                });
            },

            submit() {
                axios.post('/cart', {
                    hardwareOptionId: this.hardwareOptionId,
                    finishOptionId: this.finishOptionId,
                    productId: this.product.id
                }).then(response => {
                    console.log('in the response');
                    window.location.href = "/cart";
                });
            }

        }
    }
</script>
