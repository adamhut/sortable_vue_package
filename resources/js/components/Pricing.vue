<template>
    <div class="flex justify-center">
       <div class="px-6 py-12 w-1/2 bg-blue-900 shadow flex flex-col items-center rounded-lg">
        
            <div class="bg-gray-400 rounded-full flex justify-around p-1">
                <button 
                    v-for="(price ,frequency) in plans[0].pricing"
                    @click="currentFrequency=frequency" 
                    class="px-6 py-1 uppercase  rounded-full text-xs font-bold focus:outline-none "
                    :class="[currentFrequency==frequency ? 'bg-blue-600 text-gray-200':'']"
                >
                   {{frequency}}
                </button>
               
            </div>
            <div class="mt-8 flex w-full text-center">
                <div v-for="plan in plans" class="text-white w-1/2  ">
                    <h1 class="text-2xl font-bold">{{plan.name}}</h1>
                    <ul class="mt-4">
                        <li v-for="benefit in plan.benefits[currentFrequency]">{{benefit}}</li>
                    </ul>
                    <div class="flex justify-center mt-8 items-baseline">
                        <div  class="text-4xl font-bold"> {{getPrice(plan.pricing[currentFrequency].price)}}</div>
                        <div class="ml-1 pt-2 text-gray-300">{{plan.pricing[currentFrequency].label}}</div>
                    </div>
                </div>    
            </div>

            <div class="mt-4 text-center text-gray-400 font-bold">
                <a href="#" @click.prevent="currency= 'usd'">USD</a> | <a href="#" @click.prevent="currency= 'eur'">EUR</a>
            </div>
       </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                currentFrequency: 'monthly',
                currency:'usd',
                plans:[
                    {   
                        name:'Starter',
                        
                        benefits:{
                            monthly:['benefit1','benefit2','benefit3'],
                            yearly:['benefit1','benefit2','benefit3','benefit4'],
                            lifetime:['benefit1','benefit2','benefit3','benefit4','benefit5'],
                        },
                        pricing:{
                            monthly:{
                                price:99,
                                lable:'/mo'
                            },
                            yearly:{
                                price:499,
                                lable:'/yr'
                            },
                            lifetime:{
                                price:1200,
                                lable:''
                            },
                        }
                    },
                    {
                        name:'Pro',
                        benefits:{
                            monthly:['benefit1','benefit2','benefit3'],
                            yearly:['benefit1','benefit2','benefit3','benefit4'],
                            lifetime:['benefit1','benefit2','benefit3','benefit4','benefit5'],
                        },
                        pricing:{
                            monthly:{
                                price:199,
                                lable:'/mo'
                            },
                            yearly:{
                                price:999,
                                lable:'/yr'
                            },
                            lifetime:{
                                price:2200,
                                lable:''
                            },
                        }
                    },
                ]
            }
        },
        methods: {
            getPrice(price) {
                return this['currency'+this.currency.toUpperCase()](price);
            },

            currencyUSD(price){
                return '$'+price;
            },  
            
            currencyEUR(price){
                return Math.ceil((price * 0.85)) + ' EUR';
            }

        },
    }
</script>

<style lang="scss" scoped>

</style>