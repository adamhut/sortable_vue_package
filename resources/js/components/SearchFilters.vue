<template>
    <section class="bg-gray-800 ">
        <div class="flex justify-between py-3 px-4">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41l.01-.01zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                </div>
                <input
                    class="bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900  text-white rounded pl-10 pr-4 py-2 "
                    type="text" placeholder="Search by keywords">
            </div>
            <button class="inline-flex bg-gray-700 rounded-lg shadow pr-2 pl-3 hover:bg-gray-600 focus:shadow-outline">
                <svg class="h-6 w-6 fill-current text-gray-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm3 6a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1zm4 5a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4z" />
                    </svg>
                <span class="text-white font-medium ml-1">Filters</span>
            </button>
        </div>
        <div>
            <form action="">
                <fieldset class="px-4 py-4 border-t border-gray-900">
                    <div class="flex -mx-2">
                        <label for="" class="block w-1/2 px-2">
                            <span class=" text-sm font-semibold text-gray-500">Bedrooms</span>
                            <select name="" id="" class="mt-1 form-select block w-full ">
                                <option value="1">4</option>
                            </select>
                        </label>
                    
                        <label for="" class="block w-1/2  px-2">
                            <span  class=" text-sm font-semibold text-gray-500">>Bathrooms</span>
                            <select name="" id=""  class="mt-1 form-select block w-full">
                                <option value="1">4</option>
                            </select>
                        </label>
                    </div>
                    <div class="mt-4">
                        <label for="" class="block w-full">
                            <span class=" text-sm font-semibold text-gray-500">Price Range</span>
                            <select name="" id="" class="mt-1 form-select block w-full">
                                <option value="1">Up to $2,000/wk</option>
                            </select>
                        </label>
                    </div>
                </fieldset>
                <fieldset class="px-4 py-4 border-t border-gray-900">   
                    <span class=" block text-sm font-semibold text-gray-500">Property Type</span>  
                    <label class="flex items-center mt-2 " for="">
                        <input class="form-radio" type="radio" name="propertyType" value="house">
                        <span class="ml-2 text-white">House</span>
                    </label> 
                    <label class="flex items-center mt-2 " for="">
                        <input class="form-radio" type="radio" name="propertyType" value="apartment">
                        <span class="ml-2 text-white">Apartment</span>
                    </label> 
                    <label class="flex items-center mt-2" for="">
                        <input class="form-radio" type="radio" name="propertyType" value="loft">
                        <span class="ml-2 text-white">Loft</span>
                    </label> 
                    <label class="flex items-center mt-2" for="">
                        <input class="form-radio" type="radio" name="propertyType" value="townhouse">
                        <span class="ml-2 text-white">Townhouse</span>
                    </label>         
                </fieldset>
                <fieldset>   
                    <legend>Amenities</legend>  
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="balcony">
                        Balcony
                    </label> 
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="airConditioning">
                        Air Conditioning
                    </label> 
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="pool">
                        Pool
                    </label> 
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="beach">
                        Beach
                    </label> 
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="petFriendly">
                        Pet Friendly
                    </label> 
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="kidFriendly">
                        Kid  Friendly
                    </label>  
                    <label for="">
                        <input   class="form-checkbox" type="checkbox" name="amenities[]" value="parking">
                        parking
                    </label>         
                </fieldset>
                <div>
                    <button>Update Result</button>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
    export default {

    }
</script>

<style lang="scss" scoped>

</style>