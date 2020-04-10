<template>
    <div class="row py-4">
        <div class="col-md-7">
            
        </div>

        <div class="col-md-5">
            <h4 v-if="showFinishes">Finish Option: {{ this.finishName }}</h4>
            <h4 v-if="showHardware">Hardware Option: {{ this.hardwareName }}</h4>
            <h4 v-if="showDrawers">Drawer Option: {{ this.drawerName }}</h4>
            <h4 v-if="showBoxes">Box Option: {{ this.boxName }}</h4>
            <p class="text-danger"><strong>Please configure the options for this product to add to cart.</strong></p>
            <b-button v-b-modal.modal-1 class="btn btn-secondary btn-lg btn-block mb-2"><i class="fas fa-clipboard-list"></i> Configure product</b-button>
            <hr>
            <b-button :disabled="this.cartDisabled" variant="primary" class="btn btn-primary btn-lg btn-block mb-2" @click="submit"><i class="fas fa-shopping-cart"></i> Add to Cart</b-button> 
        </div>

        <b-modal id="modal-1" title="Finish Options" size="xl" content-class="shadow" hide-backdrop hide-footer centered no-stacking>
            <label>Pedestal:</label>
            <b-form-radio-group class="" v-model="pedestalSelected" :options="pedestalOptions" @change="checkOptionsDrawer"></b-form-radio-group>

            <label>Drawer:</label>
            <b-form-radio-group v-model="drawerSelected" :options="drawerFinishOptions" @change="checkOptionsTop"></b-form-radio-group>

            <label>Top:</label>
            <b-form-radio-group v-model="topSelected" :options="topOptions" @change="createCode"></b-form-radio-group>

            <div class="mt-3" v-if="show">Selected: <strong>{{ code }}</strong></div>

            <div v-if="show">
                <b-img class="shadow-sm w-25" v-bind:src="imagePath" fluid rounded alt="Responsive image"></b-img>
            </div>

            <b-button  @click="getFinishName">Continue to Hardware</b-button>
        </b-modal>

        <b-modal id="modal-multi-2" title="Hardware Options" size="xl" content-class="shadow" hide-backdrop hide-footer centered no-stacking>
            <b-form-radio-group v-model="hardwareOptionId" :options="hardwareOptions" @change="getHardwareName"></b-form-radio-group>
            <b-button v-b-modal.modal-1>Return to Finishes</b-button>
            <b-button v-if="showDrawers" v-b-modal.modal-multi-3>Continue to Drawers</b-button>
            <b-button v-else @click="$bvModal.hide('modal-multi-2')">Done</b-button>
        </b-modal>

        <b-modal id="modal-multi-3" title="Drawer Options" size="xl" content-class="shadow" hide-backdrop hide-footer centered no-stacking>
            <b-form-radio-group v-model="drawerOptionId" :options="drawerOptions" @change="getDrawerName"></b-form-radio-group>
            <b-button v-b-modal.modal-multi-2>Return to Hardware</b-button>
            <b-button v-if="showBoxes" v-b-modal.modal-multi-4>Continue to Boxes</b-button>
            <b-button v-else @click="$bvModal.hide('modal-multi-3')">Done</b-button>
        </b-modal>

        <b-modal id="modal-multi-4" title="Box Options" size="xl" content-class="shadow" hide-backdrop hide-footer centered no-stacking>
            <b-form-radio-group v-model="boxOptionId" :options="boxOptions" @change="getBoxName"></b-form-radio-group>
            <b-button v-b-modal.modal-multi-3>Return to Drawers</b-button>
            <b-button @click="$bvModal.hide('modal-multi-4')">Done</b-button>
        </b-modal>
    </div>
    
    
    <!-- <div v-if="showFinishes">
        <h4>Finish Options:</h4>
        <label>Pedestal:</label>
        <b-form-radio-group class="" v-model="pedestalSelected" :options="pedestalOptions" @change="checkOptionsDrawer"></b-form-radio-group>

        <label>Drawer:</label>
        <b-form-radio-group v-model="drawerSelected" :options="drawerFinishOptions" @change="checkOptionsTop"></b-form-radio-group>

        <label>Top:</label>
        <b-form-radio-group v-model="topSelected" :options="topOptions" @change="createCode"></b-form-radio-group>

        <div class="mt-3" v-if="show">Selected: <strong>{{ code }}</strong></div>

        <div v-if="show">
            <b-img class="shadow-sm w-25" v-bind:src="imagePath" fluid rounded alt="Responsive image"></b-img>
        </div>
    </div>

    
    <div v-if="showHardware">
        <h4>Hardware Options:</h4>
        <b-form-radio-group v-model="hardwareOptionId" :options="hardwareOptions"></b-form-radio-group>
    </div>

    <div v-if="showDrawers">
        <h4>Drawer Options:</h4>
        <b-form-radio-group v-model="drawerOptionId" :options="drawerOptions"></b-form-radio-group>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-md-3">
            <b-button variant="primary" class="btn btn-primary btn-lg btn-block mb-2" @click="submit"><i class="fas fa-shopping-cart"></i> Add to Cart</b-button>    
        </div>
    </div> -->

   
</template>

<script>
    export default {
        props: ['product'],

        data() {
            return {
                pedestalSelected: null,
                pedestalOptions: [
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
                drawerFinishOptions: [],
                topSelected: null,
                //topOptions: [],
                topOptions: [],
                code: null,
                show: false,
                imagePath: null,
                //hardwareSelected: null,
                //drawerSelected: null,
                hardwareOptions: [],
                drawerOptions: [],
                boxOptions: [],
                hardwareImagePath: null,
                productId: null,
                finishOptionId: null,
                hardwareOptionId: null,
                drawerOptionId: null,
                boxOptionId: null,
                showFinishes: false,
                showHardware: false,
                showDrawers: false,
                showBoxes: false,
                finishName: null,
                hardwareName: null,
                drawerName: null,
                boxName: null,
                cartDisabled: true
            };
        },

        mounted() {
            this.load();
        },

        methods: {
            load() {
                this.product.options.forEach((element) => {
                    console.log(element);
                    switch (element.OptCode) {
                        case "1":
                            this.showFinishes = true;
                            break;
                        case "H":
                            this.showHardware = true;
                            this.hardwareOptions.push({ value: element.id, html: `${element.OptName}<br><img src='http://vicarswood.test/images/FinishCombinations/${element.PhotoFile}' class='fluid rounded shadow-sm' >`});
                            break;
                        case "D":
                            this.showDrawers = true;
                            this.drawerOptions.push({ value: element.id, html: `${element.OptName}<br><img src='http://vicarswood.test/images/FinishCombinations/${element.PhotoFile}' class='fluid rounded shadow-sm' >`});
                            break;
                        case "B":
                            this.showBoxes = true;
                            break;
                        default:
                            break;
                    }
                });


            },

            checkOptionsDrawer(value) {
                this.show = false;
                this.drawerFinishOptions = [];
                this.drawerSelected = null;
                this.topOptions = [];
                this.topSelected = null;

                var found = this.pedestalOptions.find(option => option.value === value);
                this.drawerFinishOptions.push(found);

                switch(value) {
                    case 'N':
                        break;
                    case 'A':
                        break;
                    case 'C':
                        this.drawerFinishOptions.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        break;
                    default:
                        this.drawerFinishOptions.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        this.drawerFinishOptions.push({ value: 'C', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Cherry.png' class='fluid rounded shadow-sm' >"});
                }
            },

            checkOptionsTop(value) {
                this.show = false;
                this.topOptions = [];
                this.topSelected = null;
                this.code = null;
                
                var found = this.pedestalOptions.find(option => option.value === this.pedestalSelected);
                this.topOptions.push(found);
                
                switch(value) {
                    case 'N':
                        break;
                    case 'A':
                        if(this.pedestalSelected != 'A') {
                            var found = this.drawerFinishOptions.find(option => option.value === value);
                            this.topOptions.push(found);
                        }
                        break;
                    case 'C':
                        if(this.pedestalSelected == 'C') {
                            this.topOptions.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        } else {
                            var found = this.drawerFinishOptions.find(option => option.value === value);
                            this.topOptions.push(found);
                        }
                        break;
                    default:
                        this.topOptions.push({ value: 'A', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Natural.png' class='fluid rounded shadow-sm' >"});
                        this.topOptions.push({ value: 'C', html: "<img src='http://vicarswood.test/images/FinishCombinations/Finish_Cherry.png' class='fluid rounded shadow-sm' >"});
                }
            },

            createCode(value) {
                this.code = this.pedestalSelected + this.drawerSelected + value;
                var finishOption = this.product.options.find(element => element.OptPosition == this.code);
                this.imagePath = "/images/FinishCombinations/"+finishOption.PhotoFile;
                this.show = true;
                this.finishOptionId = finishOption.id
            },

            getFinishName() {
                var finishOption = this.product.options.find(element => element.id == this.finishOptionId);
                this.finishName = finishOption.OptName;
                this.$bvModal.show('modal-multi-2');
                this.checkCartButton();
            },

            getHardwareName(value) {
                var hardwareOption = this.product.options.find(element => element.id == value);
                this.hardwareName = hardwareOption.OptName;
                this.checkCartButton();
            },

            getDrawerName(value) {
                var drawerOption = this.product.options.find(element => element.id == value);
                this.drawerName = drawerOption.OptName;
                this.checkCartButton();
            },

            getBoxName(value) {
                var boxOption = this.product.options.find(element => element.id == value);
                this.boxName = boxOption.OptName;
                this.checkCartButton();
            },

            checkCartButton() {
                if(this.showFinishes) {
                    if(this.finishName) {
                        if(this.showHardware) {
                            if(this.hardwareName) {
                                if(this.showDrawers) {
                                    if(this.drawerName) {
                                        if(this.showBoxes) {
                                            if(this.boxName) {
                                                this.cartDisabled = false;
                                            }
                                        } else {
                                            this.cartDisabled = false;
                                        }
                                    }
                                } else {
                                    this.cartDisabled = false;
                                }
                            }
                        }
                    }
                }
            },

            submit() {
                axios.post('/cart', {
                    hardwareOptionId: this.hardwareOptionId,
                    finishOptionId: this.finishOptionId,
                    drawerOptionId: this.drawerOptionId,
                    boxOptionId: this.boxOptionId,
                    productId: this.product.id
                }).then(response => {
                    if (response.data.success) {
                        window.location.assign('/cart?status=1');  
                    }
                });
            }

        }
    }
</script>
