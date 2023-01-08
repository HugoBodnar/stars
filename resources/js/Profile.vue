<template>
    <div class="overflow-auto p-2 md:p-4">
        <div class="mb-2 font-bold text-md md:text-xl hidden md:inline-block">{{ star.firstname + ' ' + star.lastname }}</div>
        <img :src="star.image" alt="" class="float-left mr-3 mb-1 w-28 h-28 md:w-32 md:h-32 border-4 border-solid border-white shadow-md shadow-gray-400" />
        <p class="text-xs md:text-sm">{{ star.description }}</p>
    </div>
</template>

<script>
export default {
    name: "Profile",
    props: {
        star: {
            type: Object
        }
    }
}
</script>

<style scoped>

</style>
