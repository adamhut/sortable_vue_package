<template>
    <section class="bg-gray-800 xl:w-72 ">
        <div class="flex justify-between py-3 px-4 xl:hidden">
            <div class="relative max-w-sm w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41l.01-.01zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                </div>
                <input
                    class="w-full block bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900  text-white rounded pl-10 pr-4 py-2 "
                    type="text" placeholder="Search by keywords">
            </div>
            <button class="ml-4 inline-flex hover:bg-gray-600 rounded-lg pr-2 pl-3 shadow focus:outline-none focus:outline-shadow " 
                type="button" 
                @click="toggle"
                :class="{ 'bg-gray-600':isOpen, 'bg-gray-700':!isOpen}"
            >
                <svg class="h-6 w-6 fill-current text-gray-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm3 6a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm4 5a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4z" />
                    </svg>
                <span class="text-white font-medium ml-1">Filters</span>
            </button>
        </div>
             <form :class="{ 'hidden': !isOpen, 'block': isOpen }" class="xl:block xl:h-full xl:flex xl:flex-col xl:justify-between">
                <div class="lg:flex xl:block  xl:overflow-y-auto">
                    <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 xl:w-full xl:border-t-0">
                        <div class="flex flex-wrap -mx-2">
                            <label class="block w-1/2 px-2 sm:w-1/4 lg:w-1/2">
                                <span class=" text-sm font-semibold text-gray-500">Bedrooms</span>
                                <select name="" id="" class="mt-1 form-select block w-full text-white focus:bg-gray-600">
                                    <option value="1">4</option>
                                </select>
                            </label>
                            <label class="block w-1/2  px-2 sm:w-1/4 lg:w-1/2">
                                <span  class=" text-sm font-semibold text-gray-500">Bathrooms</span>
                                <select name="" id=""  class="mt-1 form-select block w-full text-white  focus:bg-gray-600">
                                    <option value="1">4</option>
                                </select>
                            </label>
                            <label class="mt-4 block w-full px-2 sm:mt-0 sm:w-1/2 lg:mt-4 lg:w-full ">
                                <span class=" text-sm font-semibold text-gray-500">Price Range</span>
                                <select name="" id="" class="mt-1 form-select block w-full text-white  focus:bg-gray-600">
                                    <option value="1">Up to $2,000/wk</option>
                                </select>
                            </label>                        
                        </div>  
                    </div>
                    <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 xl:w-full lg:border-l">   
                        <span class=" block text-sm font-semibold text-gray-500">Property Type</span>  
                        <div class="sm:flex sm:-mx-2 lg:block lg:mx-0">
                            <label class="flex items-center mt-3 sm:w-1/4 sm:px-2 lg:w-full lg:px-0 ">
                                <input class="form-radio bg-gray-900  focus:bg-gray-700" type="radio" name="propertyType" value="house">
                                <span class="ml-2 text-white">House</span>
                            </label> 
                            <label class="flex items-center mt-3 sm:w-1/4 sm:px-2 lg:w-full lg:px-0 ">
                                <input class="form-radio bg-gray-900  focus:bg-gray-700" type="radio" name="propertyType" value="apartment">
                                <span class="ml-2 text-white">Apartment</span>
                            </label> 
                            <label class="flex items-center mt-3 sm:w-1/4 sm:px-2 lg:w-full lg:px-0">
                                <input class="form-radio bg-gray-900  focus:bg-gray-700" type="radio" name="propertyType" value="loft">
                                <span class="ml-2 text-white">Loft</span>
                            </label> 
                            <label class="flex items-center mt-3 sm:w-1/4 sm:px-2 lg:w-full lg:px-0">
                                <input class="form-radio bg-gray-900  focus:bg-gray-700" type="radio" name="propertyType" value="townhouse">
                                <span class="ml-2 text-white">Townhouse</span>
                            </label>         
                        </div>
                    </div>
                    <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 xl:w-full lg:border-l">   
                        <span class=" block text-sm font-semibold text-gray-500">Amenities</span>  
                        <div class="sm:flex sm:flex-wrap sm:-mx-2">
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="balcony">
                                <span class="ml-2 text-white">Balcony</span>
                            </label> 
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="pool">
                                <span class="ml-2 text-white">Pool</span>
                            </label> 
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="beach">
                                <span class="ml-2 text-white">Beach</span>
                            </label> 
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="parking">
                                <span class="ml-2 text-white">parking</span>
                            </label>   
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="petFriendly">
                                <span class="ml-2 text-white">Pet Friendly</span>
                            </label> 
                            <label class="flex sm:w-1/4 sm:px-2 items-center mt-3 lg:w-1/2 xl:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="kidFriendly">
                                <span class="ml-2 text-white">Kid  Friendly</span>
                            </label>   
                            <label class="flex sm:w-1/2 sm:px-2 items-center mt-3 lg:w-full">
                                <input class="form-checkbox bg-gray-900  focus:bg-gray-700" type="checkbox" name="amenities[]" value="airConditioning">
                                <span class="ml-2 text-white">Air Conditioning</span>
                            </label> 
                        </div>    
                    </div>
                </div>
                <div class="bg-gray-900 px-4 py-4 sm:text-right">
                    <button class="block w-full sm:w-auto sm:inline-block bg-indigo-500 hover:bg-indigo-400 font-semibold rounded-lg text-white px-4 py-2 xl:block xl:w-full">Update Result</button>
                </div>
            </form>
            
        
    </section>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: true
            }
        },
         methods: {
            toggle() {
                this.isOpen = !this.isOpen
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>